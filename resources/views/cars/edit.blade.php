<x-layout.main title="Редактировать {{ $car->brand }} - {{ $car->model }}" h1="Редактировать {{ $car->brand }} - {{ $car->model }}">
    <form action="{{ route('cars.update', [$car->id]) }}" method="post">
        @csrf
        @method('PUT')
        <x-input name="brand" label="Бренд" defaultValue="{{ $car->brand }}"/>
        <x-input name="model" label="Модель" defaultValue="{{ $car->model }}"/>
        <x-input name="year" label="Год" defaultValue="{{ $car->year }}"/>
        <x-input name="mileage" label="Пробег" defaultValue="{{ $car->mileage }}"/>
        <x-select name="transmission" defaultValue="{{ $car->transmission }}" :values="$transmission"></x-select>
        <div class="mt-3">
            <button class="btn btn-primary">Изменить</button>
        </div>
    </form>
</x-layout.main>
