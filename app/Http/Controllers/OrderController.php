<?php

namespace App\Http\Controllers;

use App\Models\IconsModel;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function create(Request $request)
    {
        //prikaz str za kreiranje narudzbe
        $userId = Auth::id();

        $order = Order::where('user_id', $userId)->latest()->first();


        return view('orders.create', [
            'total_price' => $order?->total_price ?? 0,
            'order' => $order,
        ]);
    }

    public function store(Request $request, Order $order)
    {
        // Validacija forme
        $validated = $request->validate([
            'payment_method' => 'required|in:cash,card',
        ]);

        // Upis u bazu
        $order->payment_method = $validated['payment_method'];
        $order->save();

        // Ako je izabrano plaćanje karticom, možeš dalje obraditi (npr. redirect ka Stripe)
        if ($validated['payment_method'] === 'card') {
            return redirect()->route('payment.card', $order->id); // prilagodi ovu rutu
        }
        if ($order->user_id !== Auth::id()) {
            abort(403, 'Nemate dozvolu da menjate ovu narudžbinu.');
        }


        return redirect("/")->with('success', 'Uspešno ste završili kupovinu.');
    }



    public function show($id)
    {
        $order = Order::findOrFail($id);
        return view('orders.show', compact('order'));
    }
}
