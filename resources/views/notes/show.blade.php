<a href="{{ route('notes.index') }}">back</a>
<h3>{{ $note->title }}</h3>
<div style="background-color: #f5f5f5; padding: 5px; border-radius: 5px; border: 1px solid gray;"><pre>{{ $note->content }}</pre></div>
<hr>
<div><a href="{{ route('notes.edit', [$note->id]) }}">Редактировать запись</a></div>
<hr>
<form action="{{ route('notes.destroy', [$note->id]) }}" method="post">
    @csrf
    @method('DELETE')
    <button>delete</button>
</form>
