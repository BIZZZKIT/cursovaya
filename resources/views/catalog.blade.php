<style>
    .grid-container {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 20px;
    }

    .card {
        width: 100%;
    }
</style>

@extends('welcome')
@section('title', 'Каталог')
@section('content')
    <div class="container">
        <div class="d-flex justify-content-center align-items-center">
            <h1 class="mt-5 mb-5">Каталог</h1>
        </div>
        <div class="cards_product">
                <form class="filtration d-flex gap-3 pb-3" method="GET">
                    @csrf
                    <select class="form-control w-25" name="category" id="category">
                        <option value="">Все категории</option>
                        @foreach($categories as $category)
                            <option value="{{ $category->id }} {{ request('$category') == $category->id ? 'selected' : ''}}">{{ $category->name_category }}</option>
                        @endforeach
                    </select>
                    <select class="form-select w-25" name="sort_price" id="">
                        <option value="asc" {{ request('sort_price') == 'asc' ? 'selected' : ''}}>По возрастанию цены</option>
                        <option value="desc" {{ request('sort_price') == 'desc' ? 'selected' : ''}}>По убыванию цены</option>
                    </select>
                    <button type="submit" class="btn btn-primary">Применить</button>
                </form>
            <div class="grid-container">
                @foreach($products as $product)
                    <div class="card">
                        <a href="{{route('product',$product)}}"><img src="{{asset('storage/' . $product->image_product)}}" class="card-img-top" alt="..."></a>
                        <div class="card-body">
                            <h5 class="card-title">{{$product->price_product}}</h5>
                            <p class="card-text">{{$product->name_product}}</p>
                            <p class="card-text">{{$product->category->name_category}}</p>
                            <form action="{{route('createBasketItem', ['productId' => $product->id])}}" method="post">
                                @csrf
                                @auth()
                                <button class="btn btn-primary" type="submit">В корзину</button>
                                @endauth
                            </form>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

    </div>
@endsection
