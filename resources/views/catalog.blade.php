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
            <h1>Каталог</h1>
        </div>
        <div class="cards_product">
                <form class="filtration d-flex gap-3 pb-3" method="post">
                    @csrf
                    <select class="form-control" name="filSortBy" id="filSortByAscDsc" style="width: 100px">
                        <option value="">Все</option>
                        <option value="">По возрастанию</option>
                        <option value="">По убыванию</option>
                    </select>
                    <select class="form-control" name="filSortByCategories" style="width: 100px" id="filSortBy">
                        <option value="">Все</option>
                        <option value="">По возрастанию</option>
                        <option value="">По убыванию</option>
                    </select>
                    <button type="submit" class="btn btn-primary">Применить</button>
                </form>
            <div class="grid-container">
                @foreach($products as $product)
                    <div class="card">
                        <img src="{{asset('storage/' . $product->image_product)}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{$product->price_product}}</h5>
                            <p class="card-text">{{$product->name_product}}</p>
                            <p class="card-text">{{$product->category->name_category}}</p>
                            <a href="#" class="btn btn-primary">В корзину</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

    </div>
@endsection
