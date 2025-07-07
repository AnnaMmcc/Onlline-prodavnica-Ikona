<?php

namespace App\Http\Controllers;

use App\Http\Requests\CartAddRequest;
use App\Http\Requests\CheckoutRequest;
use App\Http\Requests\UpdateOrderRequest;
use App\Models\IconsModel;
use App\Models\Order;
use App\Models\OrderItemsModel;
use App\Repositories\OrderRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class OrderController extends Controller
{
    protected $orderRepo;

    public function __construct(OrderRepository $orderRepo)
    {
        $this->orderRepo = $orderRepo;
    }

    public function addContact(Request $request)
    {
      $request->validate([
      'phone' => 'required|string|min:6|max:20'
      ]);

      $user = auth()->user();
      $user->phone = $request->input('phone');
      $user->save();
      return redirect()->back()->with('success', 'Broj telefona je uspesno dodat');

    }

    public function addToCart(CartAddRequest $request)
    {
        $product = IconsModel::find($request->id);

        $cart = Session::get('product', []);
        foreach ($cart as &$item) {
            if ($item['product_id'] == $request->id) {
                $item['amount'] += $request->amount;
                Session::put('product', $cart);
                return redirect()->route('cart')->with('success', 'Količina ažurirana u korpi');
            }
        }

        Session::push('product', [
            'product_id' => $request->id,
            'amount' => $request->amount
        ]);

        return redirect()->route('cart')->with('success', 'Proizvod uspešno dodat u korpu');
    }


    public function index()
    {
        $cart = Session::get('product', []);

        if (count($cart) < 1) {
            return redirect("/");
        }
        $combine = collect($cart)->map(function ($item) {

            $product = IconsModel::find($item['product_id']);
            if (!$product) return null;
            return [
                'product_id' => $item['product_id'],
                'name' => $product->name,
                'description' => $product->description,
                'amount' => $item['amount'],
                'price' => $product->price,
                'total' => $item['amount'] * $product->price,
            ];

        })->filter()->values();

      $totalPrice = $combine->sum('total');

      return view('cart',[
          'combinedItems' => $combine,
          'totalPrice' => $totalPrice,
      ]);

    }


    public function checkout(CheckoutRequest $request)
    {
        $cart = Session::get('product', []);

        $result = $this->orderRepo->createOrderWithItems(
            $cart,
            $request->payment_method,
            $request->phone
        );

        if (isset($result['error'])) {
            return redirect('/cart')->with('error', $result['error']);
        }

        return redirect()->route('order.' . $request->payment_method)
            ->with('order_id', $result['order']->id);
    }

    public function card()
    {
        $order = Order::find(session('order_id'));

        if (!$order) {
            return redirect('/')->with('error', 'Narudžbina nije pronađena.');
        }

        return view('card', compact('order'));
    }

    public function cash()
    {
        $order = Order::find(session('order_id'));

        if (!$order) {
            return redirect('/')->with('error', 'Narudžbina nije pronađena.');
        }

        return view('cash', compact('order'));
    }

    public function orders()
    {
        $orders = Order::all();

        return view('admin.orders-all', compact('orders'));

    }

    public function edit(Order $order)
    {
        return view('orders-edit', compact('order'));
    }

    public function update(UpdateOrderRequest $request, Order $order)
    {
        $this->orderRepo->updateOrder($order, $request->only(['status', 'payment_method']));

        return redirect()->route('all.orders')->with('success', 'Porudžbina je uspešno izmenjena.');
    }

    public function destroy(Order $order)
    {
        $order->items()->detach();

        $order->delete();

        return redirect()->route('all.orders')->with('success', 'Porudžbina je uspešno obrisana.');
    }

    public function remove($product_id)
    {
        $cart = Session::get('product', []);


        $cart = array_filter($cart, function ($item) use ($product_id) {
            return $item['product_id'] != $product_id;
        });

        Session::put('product', $cart);

        return redirect()->back()->with('success', 'Stavka je uspešno uklonjena.');
    }


}
