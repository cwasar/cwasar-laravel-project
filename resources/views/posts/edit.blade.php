<x-layout.main title="Редактирование посты" h1="Редактирование: {{ $post->title }}">
<form action="{{ route('posts.update', [$post->id]) }}" method="post">
    @csrf
    @method('PUT')
    <x-input label="Post title" name="title" placeholder="Введите название" default-value="{{ $post->title }}"/>
    <br><br>
    <x-input label="Post content" name="content" placeholder="Введите текст" default-value="{{ $post->content }}"/>
    <br><br>
    <button>Отправить</button>
</form>
</x-layout.main>
