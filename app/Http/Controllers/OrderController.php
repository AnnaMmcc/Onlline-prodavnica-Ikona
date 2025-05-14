<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function create()
    {
        //prikaz str za kreiranje narudzbe

        return view('orders.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'payment_method' => 'required',
            'total_price' => 'required|numeric',
        ]);

        $order = Order::create([
            'user_id' => Auth::id(),
            'status' => 'pending',
            'total_price' =>$request->input('total_price'),
            'payment_method' => $request->input('payment_method'),
        ]);

        return redirect()->route('orders.show', ['order' => $order->id]);
    }

    public function show($id)
    {
        $order = Order::findOrFail($id);
        return view('orders.show', compact('order'));
    }
}
