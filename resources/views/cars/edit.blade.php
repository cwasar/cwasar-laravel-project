<x-layout.main title="Редактировать {{ $brands[$car->brand_id] }} - {{ $car->model }}" h1="Редактировать {{ $car->brand->title }} - {{ $car->model }}">
    <form action="{{ route('cars.update', [$car->id]) }}" method="post">
        @csrf
        @method('PUT')
        <x-select name="brand_id" defaultValue="{{ $car->brand_id }}" :values="$brands"></x-select>
        <x-input name="model" label="Модель" defaultValue="{{ $car->model }}"/>
        <x-input name="year" label="Год" defaultValue="{{ $car->year }}"/>
        <x-input name="mileage" label="Пробег" defaultValue="{{ $car->mileage }}"/>
        <x-input name="img" label="Ссылка на фото" defaultValue="{{ $car->img }}"/>
        <x-select name="transmission" defaultValue="{{ $car->transmission }}" :values="$transmission"></x-select>
        <div class="mt-3">
            <button class="btn btn-primary">Изменить</button>
        </div>
    </form>
</x-layout.main>
