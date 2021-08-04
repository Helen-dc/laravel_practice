@extends('layout')

@section('title')Страница про нас@endsection

@section('main_content')
    <div class="container py-4">
        <div class="p-5 mb-4 bg-warning rounded-3">
            <div class="container-fluid py-5">
            <h1 class="display-5 fw-bold">Страница про нас</h1>
            <p class="col-md-8 fs-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos laudantium facilis cupiditate officiis eligendi dolor ex esse? Repellat animi eos rerum maxime, fuga aperiam?</p>
            <p><a class="btn btn-danger btn-lg" href='/review' role="button">Отзывы >></a></p>
        </div>
    </div>
@endsection