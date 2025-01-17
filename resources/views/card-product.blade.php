@extends('welcome')
@section('title', 'Каталог')
@section('content')
    <style>
        .product-card {
            border: 1px solid #e0e0e0;
            border-radius: 10px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s;
        }
        .product-card:hover {
            transform: scale(1.02);
        }
        .product-image img {
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
            height: 400px;
            object-fit: cover;
        }
        .review {
            border-bottom: 1px solid #e0e0e0;
            padding: 10px 0;
        }
    </style>
    <div class="container mt-5">
        <div class="d-flex justify-content-center flex-wrap gap-5">
            <div class="col-md-6">
                @foreach($products as $product)
                <div class="product-card">
                    <div class="product-image">
                        <img src="path/to/product-image.jpg" alt="Название продукта" class="img-fluid">
                    </div>
                    <div class="p-4">
                        <h1 class="product-title">Название продукта</h1>
                        <p class="product-country">Страна производителя: <strong>Россия</strong></p>
                        <p class="product-description">
                            Здесь будет описание продукта. Оно должно быть информативным и привлекательным, чтобы заинтересовать покупателя. Вы можете добавить детали о характеристиках, преимуществах и использовании продукта.
                        </p>
                        <button class="btn btn-primary mt-3">Добавить в корзину</button>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="col-md-6">
                <h2>Отзывы</h2>
                <div class="review">
                    <strong>Иван П.</strong>
                    <p>Отличный продукт! Очень доволен покупкой.</p>
                </div>
                <div class="review">
                    <strong>Мария С.</strong>
                    <p>Качество на высоте, рекомендую!</p>
                </div>
                <div class="review">
                    <strong>Алексей К.</strong>
                    <p>Не совсем то, что ожидал, но в целом неплохо.</p>
                </div>
                <button class="btn btn-secondary mt-3">Оставить отзыв</button>
            </div>
        </div>

    </div>
@endsection
