@extends('layout')

@section('title')Главная страница@endsection

@section('main_content')
<main>
  <div class="container py-4">

    <div class="p-5 mb-4 bg-warning rounded-3">
      <div class="container-fluid py-5">
        <h1 class="display-5 fw-bold">Главная страница</h1>
        <p class="col-md-8 fs-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi quia aliquid dignissimos sapiente repudiandae laboriosam numquam, deserunt dolor harum minus magnam facere debitis excepturi ea incidunt recusandae asperiores error praesentium?</p>
        <p><a class="btn btn-danger btn-lg" href='/review' role="button">Отзывы >></a></p>
      </div>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <h2>Heading</h2>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam voluptatum atque possimus reiciendis quos, sunt iure molestias in eum amet, non quia nemo est dignissimos neque maxime recusandae! Mollitia, exercitationem!</p>
          <p><a class="btn btn-secondary" href='#' role="button">View details >></a></p>
        </div>
        <div class="col-md-4">
          <h2>Heading</h2>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam voluptatum atque possimus reiciendis quos, sunt iure molestias in eum amet, non quia nemo est dignissimos neque maxime recusandae! Mollitia, exercitationem!</p>
          <p><a class="btn btn-secondary" href='#' role="button">View details >></a></p>
        </div>
        <div class="col-md-4">
          <h2>Heading</h2>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam voluptatum atque possimus reiciendis quos, sunt iure molestias in eum amet, non quia nemo est dignissimos neque maxime recusandae! Mollitia, exercitationem!</p>
          <p><a class="btn btn-secondary" href='#' role="button">View details >></a></p>
        </div>
      </div>
    </div>

    <footer class="pt-3 mt-4 text-muted border-top">
      &copy; 2021
    </footer>
  </div>
</main>
@endsection