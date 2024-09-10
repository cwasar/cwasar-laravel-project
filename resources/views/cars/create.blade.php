<x-layout.main title="Добавить машину" h1="Добавить машину">
    <form action="/cars" method="post">
        @csrf
        <x-input label="Бренд" name="brand" />
        <x-input label="Модель" name="model" />
        <x-input label="Год" name="year" />
        <x-input label="Пробег" name="mileage" />
        <x-input label="Ссылка на фото" name="img" />
        <x-select name="transmission" :values="$transmission"></x-select>
        <div class="mt-3">
            <button class="btn btn-primary">Добавить</button>
        </div>
    </form>
</x-layout.main>
