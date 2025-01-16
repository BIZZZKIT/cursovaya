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
                <div class="card">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
                <div class="card">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
                <div class="card">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
                <div class="card">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
