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
@section('title','Корзина')
@section('content')
    <div class="container">
        <div class="d-flex justify-content-center align-items-center">
            <h1>Корзина</h1>
        </div>
        <div class="grid-container">
        @foreach($basketItems as $item)
            <div class="card">
                <img src="{{asset('storage/' . $item->product->image_product)}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{$item->product->price_product}}</h5>
                    <p class="card-text">{{$item->product->name_product}}</p>
                    <p class="card-text">{{$item->product->category->name_category}}</p>
                    <div style=" display: flex; vertical-align: center">
                        <form action="{{ route('decreaseProductCount', ['basketId' => $item->id]) }}" method="POST" class="me-2">
                            @csrf
                            <button type="submit" class="btn btn-outline-danger btn-sm">-</button>
                        </form>
                        <p class="card-text mt-1">{{ $item->countProducts }}</p>
                        <form action="{{ route('increaseProductCount', ['basketId' => $item->id]) }}" method="POST" class="ms-2">
                            @csrf
                            <button type="submit" class="btn btn-outline-success btn-sm">+</button>
                        </form>
                    </div>

                </div>
            </div>
        @endforeach
        </div>
    </div>
@endsection
