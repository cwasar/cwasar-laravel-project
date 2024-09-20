<x-layout.main title="Добавить машину" h1="Добавить машину">
    <form action="/cars" method="post">
        @csrf
        <x-select name="brand_id" :values="$brands" label="Бренд" defaultValue="Выбрать"></x-select>
        <x-input label="Модель" name="model" />
        <x-input label="Год" name="year" />
        <x-input label="Пробег" name="mileage" />
        <x-input label="Ссылка на фото" name="img" />
        <x-select name="transmission" :values="$transmission"></x-select>
        <x-select name="tags[]" :values="$tags" label="Теги" multiple="multiple"></x-select>
        <div class="mt-3">
            <button class="btn btn-primary">Добавить</button>
        </div>
    </form>
</x-layout.main>
