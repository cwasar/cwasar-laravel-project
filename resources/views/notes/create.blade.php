<x-layout.main title="Добавить запись">
<form action="/notes" class="container" method="post">
    @csrf
    <x-input name="title"  label="Название" placeholder="Название" defaultValue="{{ old('title') }}"/>
    <x-textarea name="content" label="Введите текст" placeholder="Введите текст" defaultValue="{{ old('content') }}">
    </x-textarea>
    <div class="col-12 mt-3">
        <button type="submit" class="btn btn-primary">Отправить</button>
    </div>
</form>
</x-layout.main>
