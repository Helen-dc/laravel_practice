<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" 
        content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
</head>
<body class="bg-dark text-white">
<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-dark text-white border-bottom">
    <a href="/" class="d-flex align-items-center text-white text-decoration-none">
        <span class="fs-4">Site.local</span>
    </a>

    <nav class="d-inline-flex mt-2 mt-md-0 ms-md-auto">
        <a class="me-3 py-2 text-white text-decoration-none" href="/">Главная</a>
        <a class="me-3 py-2 text-white text-decoration-none" href="/about">Про нас</a>
    </nav>
    <a class="btn btn-outline-warning" href="/review">Отзывы</a>
</div>

<div class="container mt-5">
    @yield('main_content')
</div>

</body>
</html>