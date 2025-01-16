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

    public function removeProduct(Product $product)
    {
        $name = $product->product_name;
        $product->delete();
        return back()->with(['delete_product' => $name]);
    }
}