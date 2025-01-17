<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateProductRequest;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function createProduct(CreateProductRequest $request)
    {
        $requests = $request->validated();

        $photo = $request->file('image_product')->store('public');
        $requests['image_product'] = explode('/', $photo)[1];

        Product::create($requests);

        return redirect()->back()->with(['successCreateProduct' => 'Продукт успешно создан!']);
    }

    public function removeProduct($productId)
    {
        Product::where('id', $productId)->delete();
        return back();
    }

    public function getProducts()
    {
        $products = Product::all();

        return view('catalog', ['products' => $products]);
    }
    public function getProductsAdmin()
    {
        $products = Product::all();

        return view('admin.tableProducts', ['products' => $products]);
    }

    public function getCardProducts($id)
    {
        $products = Product::findOrFail($id);

        return view('card-product', ['products' => $products]);
    }
}
