<x-layout.main title="{{ $post->title }}">
<h1>{{ $post->title }}</h1>
<p>{{ $post->content }}</p>
<span><a href="{{ route('posts.edit', [$post->id]) }}">Редактировать</a></span><hr>
<form action="{{ route('posts.destroy', [$post->id]) }}" method="post">
    @csrf
    @method('DELETE')
    <button>Удали!</button>
</form>
</x-layout.main>
