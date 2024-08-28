<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

<div class="container">
    <h4 class="h4 text-center">Заметки разработчика</h4>


<h3><a href="/notes/create">Добавить новую</a></h3>

    <div class="list-group">
        @foreach($notes as $note)
        <a href="/notes/{{ $note->id }}" class="list-group-item list-group-item-action active" aria-current="true">
            <div class="d-flex w-100 justify-content-between">
                <h5 class="mb-1">{{ $note['title'] }}</h5>
                <small>{{ $note->created_at }}</small>
            </div>
            <p class="mb-1">{{ $note['content'] }}</p>
            <hr>
        </a>
        @endforeach
    </div>




</div>
</body>
</html>
