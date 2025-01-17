@extends('welcome')
@section('title', $products->name_product)
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
                <div class="product-card">
                    <div class="product-image text-center">
                        <img src="{{asset('storage/' . $products->image_product)}}" alt="Название продукта" class="img-fluid">
                    </div>
                    <div class="p-4">
                        <h1 class="product-title">{{$products->name_product}}</h1>
                        <h1 class="product-title">Цена: <strong>{{$products->price_product}}</strong></h1>
                        <p class="product-country">Страна производителя: <strong>{{$products->country_product}}</strong></p>
                        <p class="product-description">
                            {{$products->description_product}}
                        </p>
                        @auth()
                        <form action="" method="post">
                            @csrf
                                <button class="btn btn-primary" type="submit">В корзину</button>
                        </form>
                        @endauth
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-5">
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
                @auth()
                    <button type="button" class="btn btn-secondary mt-3" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">
                        Оставить отзыв
                    </button>
                @endauth
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                     aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Оставить отзыв</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                            </div>
                            <form action="{{route('categoryCreate')}}" method="post">
                                @csrf
                                <div class="modal-body">
                                    <div class="mb-3">
                                        <input class="form-control" type="text" name="name_review" id="name_review"
                                               placeholder="Ваше имя">
                                    </div>
                                    <div class="mb-3">
                                        <textarea class="form-control" rows="3" style="max-height: 400px" type="text" name="text_review" id="text_review" placeholder="Ваш отзыв"></textarea>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть
                                    </button>
                                    <button type="submit" class="btn btn-primary">Опубликовать</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
