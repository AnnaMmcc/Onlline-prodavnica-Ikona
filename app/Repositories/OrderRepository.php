<?php
namespace App\Repositories;

use App\Models\IconsModel;
use App\Models\Order;
use App\Models\OrderItemsModel;
use Illuminate\Support\Facades\Session;

class OrderRepository
{
    public function createOrderWithItems(array $cart, string $paymentMethod, string $phone)
    {
        $user = auth()->user();

        if ($user && $user->phone !== $phone) {
            $user->phone = $phone;
            $user->save();
        }

        if (count($cart) < 1) {
            return ['error' => 'Korpa je prazna.'];
        }

        $combine = [];
        foreach ($cart as $item) {
            $product = IconsModel::find($item['product_id']);
            if (!$product) {
                continue;
            }

            $combine[] = [
                'product_id' => $product->id,
                'quantity' => $item['amount'],
                'price' => $product->price,
                'total' => $item['amount'] * $product->price,
            ];
        }

        $totalPrice = 0;
        foreach ($combine as $item) {
            $totalPrice += $item['total'];
        }

        $order = Order::create([
            'user_id' => auth()->id(),
            'status' => 'pending',
            'total_price' => $totalPrice,
            'payment_method' => $paymentMethod,
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

        return ['order' => $order];
    }
}

