<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function createOrder(Request $request)
    {
        $user = auth()->user();
        $basketItems = $user->basketItems;
        if ($basketItems->isEmpty()) {
            return back()->with(['errorBasket' => 'Корзина пуста']);
        }
        $order = Order::create(['user_id' => $user->id, 'address' => $request->address, 'phone' => $request->phone, 'status' => 'В обработке']);
        foreach ($basketItems as $item) {
            $item->order_id = $order->id;
            $item->save();
        }
        return response()->json(['message' => 'Заказ успешно оформлен', 'order_id' => $order->id], 201);
    }
}
