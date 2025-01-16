@extends('welcome')
@section('title', 'О нас')
@section('content')

    <div class="container my-5">
        <div class="text-center mb-4">
            <h1>О нас</h1>
            <p class="text-muted">Добро пожаловать в интернет-магазин бытовой техники "ТехноДом"</p>
        </div>

        <div class="row align-items-center mb-5">
            <div class="col-md-6">
                <img src="{{ asset('assets/images/about.png') }}" class="img-fluid rounded" alt="ТехноДом">
            </div>
            <div class="col-md-6">
                <h2>Кто мы?</h2>
                <p>
                    Компания "ТехноДом" — ведущий интернет-магазин бытовой техники, предлагающий широкий ассортимент товаров для дома и офиса. Мы работаем с 2010 года, предоставляя нашим клиентам только качественную продукцию от мировых брендов.
                </p>
                <p>
                    Наша миссия — сделать покупку техники удобной, быстрой и выгодной для каждого клиента. Мы гордимся высоким уровнем обслуживания и профессиональной консультацией.
                </p>
            </div>
        </div>

        <div class="row mb-5">
            <div class="col-md-4 text-center">
                <img src="{{ asset('assets/images/mission.png') }}" class="mb-3" style="height: 100px;" alt="Миссия">
                <h4>Наша миссия</h4>
                <p>Сделать современную технику доступной для каждого, обеспечивая высокое качество обслуживания.</p>
            </div>
            <div class="col-md-4 text-center">
                <img src="{{ asset('assets/images/shared-vision.png') }}" class="mb-3" style="height: 100px;" alt="Видение">
                <h4>Наше видение</h4>
                <p>Быть лидером на рынке бытовой техники, предлагая инновационные решения для дома и офиса.</p>
            </div>
            <div class="col-md-4 text-center">
                <img src="{{ asset('assets/images/values.png') }}" class="mb-3" style="height: 100px;" alt="Ценности">
                <h4>Наши ценности</h4>
                <p>Клиентоориентированность, качество, инновации и экологическая ответственность.</p>
            </div>
        </div>

        <div class="bg-light p-5 rounded">
            <h2 class="text-center mb-4">Почему выбирают нас?</h2>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Широкий ассортимент бытовой техники и электроники.</li>
                <li class="list-group-item">Сотрудничество с ведущими мировыми брендами.</li>
                <li class="list-group-item">Быстрая доставка по всей стране.</li>
                <li class="list-group-item">Квалифицированная поддержка и консультации.</li>
                <li class="list-group-item">Регулярные акции и скидки для наших клиентов.</li>
            </ul>
        </div>
    </div>

@endsection
