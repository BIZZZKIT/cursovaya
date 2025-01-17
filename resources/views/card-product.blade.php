@extends('welcome')
@section('title', 'Каталог')
@section('content')
    <div class="container">
        <div class="product-card">
            <div class="product-image">
                <img src="path/to/product-image.jpg" alt="Название продукта">
            </div>
            <div class="product-details">
                <h1 class="product-title">Название продукта</h1>
                <p class="product-country">Страна производителя: <strong>Россия</strong></p>
                <p class="product-description">
                    Здесь будет описание продукта. Оно должно быть информативным и привлекательным, чтобы заинтересовать покупателя.
                </p>
            </div>
        </div>
    </div>

    <style>
        .product-card {
            background: white;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            display: flex;
            flex-direction: column;
        }

        .product-image img {
            width: 100%;
            height: auto;
        }

        .product-details {
            padding: 20px;
        }

        .product-title {
            font-size: 24px;
            margin: 0 0 10px;
        }

        .product-country {
            font-size: 16px;
            color: #555;
        }

        .product-description {
            font-size: 16px;
            line-height: 1.5;
            color: #333;
        }

    </style>
@endsection
