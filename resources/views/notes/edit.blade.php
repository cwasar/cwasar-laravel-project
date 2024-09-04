<h1>Редактирование записи</h1>
<div><a href="{{ route('notes.show', [$note->id]) }}"><--back</a></div><br>
<form action="{{ route('notes.update', [$note->id]) }}" method="post">
    @csrf
    @method('PUT')
    <x-input name="title"  label="Название" placeholder="Название" defaultValue="{{ $note->title }}"/>
    <x-textarea name="content" label="Введите текст" placeholder="Введите текст" defaultValue="{{ $note->content }}">
    </x-textarea>
    <button>Внести изменения</button>
</form>
