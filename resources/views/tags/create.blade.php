<x-layout.main title="Добавить тег" h1="Добавить тег">
    <form action="{{ route('tags.store') }}" method="post">
        @csrf
        <x-input label="Название" name="title" />
        <div class="mt-3">
            <button class="btn btn-primary">Добавить</button>
        </div>
    </form>
</x-layout.main>
