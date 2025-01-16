<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.css')}}">
    <script src="{{asset('assets/js/bootstrap.bundle.js')}}"></script>
    <title>@yield('title', 'Админ панель')</title>
</head>
<body>
@include('components.header')
@yield('content')
<div class="container">
    <div class="row">
        <div class="col"></div>
        <div class="col-12 d-flex flex-wrap justify-content-center mt-5 gap-4">
            <div class="dropdown">
                <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Управление товарами
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Создать товар</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#">Таблица товаров</a></li>
                </ul>
            </div>
            <div class="dropdown">
                <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Управление заказами
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Таблица заказов</a></li>
                </ul>
            </div>
        </div>
        <div class="col"></div>
    </div>
</div>
</body>
</html>
