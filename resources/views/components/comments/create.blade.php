@props([
    'id',
    'model'
])

<div>
    <form action="{{ route('comments.store') }}" method="post">
        @csrf
        <input type="hidden" name="id" value="{{ $id }}">
        <input type="hidden" name="model" value="{{ $model }}">
        <x-textarea label="Комментарий" name="comment" placeholder="Введите комментарий"></x-textarea>
        <button>Добавить</button>
    </form>
</div>
