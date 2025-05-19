<?php

namespace App\Http\Controllers;

use App\Models\IconsModel;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function create()
    {
        $userId = Auth::id();

        $order = Order::where('user_id', $userId)->latest()->first();


        return view('orders.create', [
            'total_price' => $order?->total_price ?? 0,
            'order' => $order,
        ]);
    }

    public function store(Request $request, Order $order)
    {
        $validated = $request->validate([
            'payment_method' => 'required|in:cash,card',
        ]);


        $order->payment_method = $validated['payment_method'];
        $order->save();



        if ($validated['payment_method'] === 'card') {
            return redirect()->route('payment.card', ['order' => $order->id]);
        }
        if ($order->user_id !== Auth::id()) {
            abort(403, 'Nemate dozvolu da menjate ovu narudžbinu.');
        }


        return redirect()->route('payment.cash', ['order' => $order->id])->with('success', 'Uspešno ste završili kupovinu.');
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




}
