<?php

namespace App\Http\Controllers;

use App\Http\Requests\CartAddRequest;
use App\Models\IconsModel;
use App\Models\Order;
use App\Models\OrderItemsModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class OrderController extends Controller
{

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


    public function checkout(Request $request)
    {
        $request->validate([
            'payment_method' => 'required|in:card,cash',
            'phone' => 'required|string|min:6|max:20',
        ]);

        $user = auth()->user();

        if ($user && $user->phone !== $request->phone) {
            $user->phone = $request->phone;
            $user->save();
        }

        $cart = Session::get('product', []);

        if (count($cart) < 1) {
            return redirect('/cart')->with('error', 'Korpa je prazna.');
        }

        $combine = collect($cart)->map(function ($item) {
            $product = IconsModel::find($item['product_id']);
            if (!$product) return null;

            return [
                'product_id' => $product->id,
                'quantity' => $item['amount'],
                'price' => $product->price,
                'total' => $item['amount'] * $product->price,
            ];
        })->filter()->values();

        $totalPrice = $combine->sum('total');


        $order = Order::create([
            'user_id' => auth()->id(),
            'status' => 'pending',
            'total_price' => $totalPrice,
            'payment_method' => $request->payment_method,
        ]);


        foreach ($combine as $item) {
            OrderItemsModel::create([
                'order_id' => $order->id,
                'product_id' => $item['product_id'],
                'quantity' => $item['quantity'],
                'price' => $item['price'],
            ]);
        }


        Session::forget('product');

        return redirect()->route('order.' . $request->payment_method)->with('order_id', $order->id);
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

    public function update(Request $request, Order $order)
    {
        $request->validate([
            'status' => 'required|string',
            'payment_method' => 'required|string|in:card,cash',
        ]);

        $order->update([
            'status' => $request->status,
            'payment_method' => $request->payment_method,
        ]);

        return redirect()->route('all.orders')->with('success', 'Porudžbina je uspešno izmenjena.');
    }

    public function destroy(Order $order)
    {
        $order->items()->detach();

        $order->delete();

        return redirect()->route('all.orders')->with('success', 'Porudžbina je uspešno obrisana.');
    }

}
