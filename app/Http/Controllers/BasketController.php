<?php

namespace App\Http\Controllers;

use App\Models\Basket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BasketController extends Controller
{
    public function createBasketItem($productId)
    {
        Basket::create([
           'product_id' => $productId,
            'user_id' => Auth::user()->id,
            'countProducts' => 1
        ]);

        return back()->with('successBasket', 'Товар добален в корзину');
    }

    public function getBasketItems()
    {
        $basketItems = Basket::where('user_id', Auth::user()->id)
            ->with('product')
            ->get();

        return view('basket', ['basketItems' => $basketItems]);
    }
    public function decreaseProductCount($basketId)
    {
        $basketItem = Basket::findOrFail($basketId);

        if ($basketItem->countProducts > 1) {
            $basketItem->decrement('countProducts');
        } else {
            $basketItem->delete();
        }

        return back()->with('success', 'Количество товара уменьшено.');
    }

    public function increaseProductCount($basketId)
    {
        $basketItem = Basket::findOrFail($basketId);

        $basketItem->increment('countProducts');

        return back()->with('success', 'Количество товара увеличено.');
    }



}
