<x-layout.main title="Теги">
    @if(session('notification'))
        <div class="alert alert-primary" role="alert">
            {{ session('notification') }}
        </div>
    @endif
    <a href="{{ route('tags.create') }}">Добавить тег</a>
    <hr>
    @foreach($tags as $tag)

                <div>
                    Тег: <a href="{{ route('tags.show', [$tag->id]) }}">{{$tag->title}}</a>
                </div>

        <hr>
    @endforeach
</x-layout.main>
