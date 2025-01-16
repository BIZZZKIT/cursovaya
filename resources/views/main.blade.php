<style>
    .card {
        height: 100%;
    }

    .card-img-top {
        height: 150px; /* Задаём фиксированную высоту для изображений */
        object-fit: cover; /* Указываем, чтобы изображение обрезалось и заполняло контейнер */
    }

    .card-body {
        display: flex;
        flex-direction: column;
        justify-content: space-between; /* Распределяем текст внутри карточки */
        height: 100%;
    }

    .card-title {
        font-size: 1.25rem;
        font-weight: bold;
    }

    .card-text {
        font-size: 0.9rem;
        margin-top: auto; /* Отправляем текст к нижней части карточки */
    }
</style>

@extends('welcome')
@section('title', 'Главная страница')
@section('content')
    <div class="carousel">
        <div class="container">
            <div id="carouselExample" class="carousel slide">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{asset('assets/images/Group1.png')}}" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="{{asset('assets/images/Group2.png')}}" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="{{asset('assets/images/Group3.png')}}" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample"
                        data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample"
                        data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>
    <div class="d-flex justify-content-center align-items-center" style="min-height: 100vh;">
        <div class="brends">
            <div class="container mt-4">
                <div class="d-flex justify-content-center align-items-center mb-4">
                    <h1>Популярные бренды</h1>
                </div>
                <div class="d-flex justify-content-center">
                    <div class="row row-cols-1 row-cols-md-3 g-4"> <!-- Изменено на row-cols-md-3 -->
                        <div class="col d-flex justify-content-center">
                            <div class="card" style="width: 18rem;">
                                <img src="{{asset('assets/images/20137.png')}}" class="card-img-top" alt="LG">
                                <div class="card-body">
                                    <h5 class="card-title">LG</h5>
                                    <p class="card-text">LG — южнокорейская компания, известная производством бытовой
                                        техники, телевизоров и другой электроники.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col d-flex justify-content-center">
                            <div class="card" style="width: 18rem;">
                                <img src="{{asset('assets/images/0h3rie0jfj0pa3pr9mvmrew0saiqysuy.png')}}"
                                     class="card-img-top" alt="Samsung">
                                <div class="card-body">
                                    <h5 class="card-title">Samsung</h5>
                                    <p class="card-text">Samsung — южнокорейский бренд, лидер в производстве бытовой
                                        техники, электроники и мобильных устройств.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col d-flex justify-content-center">
                            <div class="card" style="width: 18rem;">
                                <img src="{{asset('assets/images/45137166-16122917341258523_origin.png')}}"
                                     class="card-img-top" alt="Philips">
                                <div class="card-body">
                                    <h5 class="card-title">Philips</h5>
                                    <p class="card-text">Philips — нидерландская компания, выпускающая бытовую технику,
                                        светотехнику и медицинское оборудование.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col d-flex justify-content-center">
                            <div class="card" style="width: 18rem;">
                                <img src="{{asset('assets/images/6364faa19a728.png')}}" class="card-img-top"
                                     alt="Bosch">
                                <div class="card-body">
                                    <h5 class="card-title">Bosch</h5>
                                    <p class="card-text">Bosch — немецкий производитель бытовой техники, известный своим
                                        качеством и инновациями.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col d-flex justify-content-center">
                            <div class="card" style="width: 18rem;">
                                <img src="{{asset('assets/images/whirlpool.png')}}" class="card-img-top"
                                     alt="Whirlpool">
                                <div class="card-body">
                                    <h5 class="card-title">Whirlpool</h5>
                                    <p class="card-text">Whirlpool — американская компания, один из крупнейших
                                        производителей бытовой техники в мире.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col d-flex justify-content-center">
                            <div class="card" style="width: 18rem;">
                                <img src="{{asset('assets/images/d1padar65mfi8h3wxx1lnqm09v4pq73u.webp')}}"
                                     class="card-img-top" alt="Electrolux">
                                <div class="card-body">
                                    <h5 class="card-title">Electrolux</h5>
                                    <p class="card-text">Electrolux — шведская компания, выпускающая широкий спектр
                                        бытовой техники, включая пылесосы и плиты.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="reviews">
        <div class="d-flex justify-content-center align-items-center">
            <h1>Отзывы</h1>
        </div>
    </div>
@endsection
