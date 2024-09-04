@props([
    'title',
    'h1' => null,
])

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
<header class="border-bottom">
    <ul class="nav justify-content-center">
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{ route('posts.index') }}">Посты</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{ route('notes.index') }}">Заметки</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{ route('cars.index') }}">Машины</a>
        </li>
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


