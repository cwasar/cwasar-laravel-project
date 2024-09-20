<x-layout.main title="Редактировать {{ $brand->title }}" h1="Редактировать {{ $brand->title }}">
    <form action="{{ route('brands.update', [$brand->id]) }}" method="post">
        @csrf
        @method('PUT')
        <x-input name="title" label="Название" defaultValue="{{ $brand->title }}"/>
        <x-input name="description" label="Описание" defaultValue="{{ $brand->description }}"/>
        <div class="mt-3">
            <button class="btn btn-primary">Изменить</button>
        </div>
    </form>
</x-layout.main>
