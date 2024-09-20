<x-layout.main title="Редактировать {{ $tag->title }}" h1="Редактировать {{ $tag->title }}">
    <form action="{{ route('tags.update', [$tag->id]) }}" method="post">
        @csrf
        @method('PUT')
        <x-input name="title" label="Название" defaultValue="{{ $tag->title }}"/>
        <div class="mt-3">
            <button class="btn btn-primary">Изменить</button>
        </div>
    </form>
</x-layout.main>
