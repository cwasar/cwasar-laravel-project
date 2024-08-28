<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Добавить заметку</title>

</head>
<body>
<h1 class="text-center">Добавить заметку</h1>
<form action="/notes" class="container" method="post">
    @csrf
    <div class="mb-3">
        <label for="formGroupExampleInput" class="form-label">Название</label>
        <input type="text" name="title" class="form-control" id="formGroupExampleInput" placeholder="Введите название">
    </div>
    <div class="form-floating">
        <textarea name="content" class="form-control" placeholder="Текст заметки" id="floatingTextarea2" style="height: 100px"></textarea>
        <label for="floatingTextarea2">Текст</label>
    </div>
    <div class="col-12 mt-3">
        <button type="submit" class="btn btn-primary">Отправить</button>
    </div>

</form>
</body>
</html>


