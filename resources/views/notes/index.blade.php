<x-layout.main title="Заметки разработчика" h1="Заметки разработчика">
<div class="container">
<h3><a href="/notes/create">Добавить новую</a></h3>

    <div class="list-group">
        @foreach($notes as $note)
        <a href="{{ route('notes.show', [$note->id]) }}" class="list-group-item list-group-item-action active" aria-current="true">
            <div class="d-flex w-100 justify-content-between">
                <h5 class="mb-1">{{ $note['title'] }}</h5>
                <small>{{ $note->created_at }}</small>
            </div>
            <p class="mb-1"><pre>{{ $note['content'] }}</pre></p>
            <hr>
        </a>
        @endforeach
    </div>
</div>
</x-layout.main>
