@props([
    'title',
    'h1' => null,
])
@php
    $curPage = Request::path();
    $curPage = explode('/', $curPage)[0];
@endphp

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>{{ $title }}</title>
    @vite(['resources/css/app.scss'])
</head>
<body>
<header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom container">
        <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
            <img class="bi me-2"  height="65" src="/storage/img/logo/logo.png" alt="">
        </a>

        <ul class="nav nav-pills">
            <li class="nav-item"><a href="{{ route('main.index') }}" class="nav-link {{ $curPage == '' ? 'active' : '' }}" aria-current="page">Главная</a></li>
            <li class="nav-item"><a href="{{ route('notes.index') }}" class="nav-link {{ $curPage == 'notes' ? 'active' : '' }}">Заметки</a></li>
            <li class="nav-item"><a href="{{ route('posts.index') }}" class="nav-link {{ $curPage == 'posts' ? 'active' : '' }}">Посты</a></li>
            <li class="nav-item"><a href="{{ route('cars.index') }}" class="nav-link {{ $curPage == 'cars' ? 'active' : '' }}">Машины</a></li>
            <li class="nav-item"><a href="{{ route('trash.index') }}" class="nav-link {{ $curPage == 'trash' ? 'active' : '' }}">Удаленные машины</a></li>
        </ul>

</header>

<div class="container">
    <h1 class="h1">{{ $h1 }}</h1>
{{ $slot }}
</div>
<footer class="border-top">
    <div class="container text-center">
        <h2>Спасибо за футер</h2>
    </div>
</footer>
@vite(['resources/js/app.js'])
</body>
</html>


