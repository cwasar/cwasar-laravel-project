<x-layout.main title="" h1="">
    @if(session('notification'))
        <div class="alert alert-primary" role="alert">
            {{ session('notification') }}
        </div>
   @endif
<div class="row">
    <div class="col">
        <div><a href="{{ route('tags.index') }}">Назад</a></div>
        <div>{{ $tag->title }}</div>
        <div><a href="{{ route('tags.edit', [$tag->id]) }}">Редактировать</a></div>
        <form action="{{ route('tags.destroy', [$tag->id]) }}" method="post">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger mt-2">Удалить</button>
        </form>
    </div>
</div>
</x-layout.main>
