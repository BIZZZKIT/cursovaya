@extends('welcome')
@section('title', 'Таблица продуктов')
@section('content')
    <div class="container">
        <div class="d-flex justify-content-center align-items-center">
            <h1>Таблица товаров</h1>
        </div>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Название товара</th>
                <th scope="col">Цена</th>
                <th scope="col">Категория</th>
                <th scope="col">Описание</th>
                <th scope="col">Изображение</th>
            </tr>
            </thead>
            <tbody>
            @foreach($products as $product)
                <tr>
                    <th>{{$product->id}}</th>
                    <th>{{$product->name_product}}</th>
                    <th>{{$product->price_product}}</th>
                    <th>{{$product->category->name_category}}</th>
                    <th>{{$product->description_product}}</th>
                    <th><img src="{{asset('storage/' . $product->image_product)}}" alt="" style="width: 100px"></th>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
