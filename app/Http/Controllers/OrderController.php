<?php

namespace App\Http\Controllers;

use App\Http\Requests\CartAddRequest;
use App\Models\IconsModel;
use App\Models\Order;
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



}
