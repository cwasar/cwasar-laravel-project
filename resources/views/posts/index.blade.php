<x-layout.main title="Все посты" h1="Посты">
    <div class="container">
        <div>
            <a href="{{ route('posts.create') }}">Создать пост</a>
        </div>
        <ul>
            @foreach($posts as $post)
                <hr>
                <li>{{ $post->id }}
                    <div>{{ $post->title  }}</div>
                    <div>{{ $post->content }}</div>
                    <div>
                        <a href="{{ route('posts.show', [$post->id]) }}">more..</a>
                    </div>
                </li>
                <hr>
            @endforeach
        </ul>
    </div>
</x-layout.main>





