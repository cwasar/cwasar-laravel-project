<x-layout.main title="" h1="">
    <div><a href="{{ route('cars.index') }}">Назад</a></div>
    <div>Бренд: {{ $car->brand }}</div>
    <div>Модель: {{ $car->model }}</div>
    <div>Год: {{ $car->year }}</div>
    <div>Пробег: {{ $car->mileage }}</div>
    <div>Трансмиссия: {{ $transmission[$car->transmission] }}</div>
    <div><a href="{{ route('cars.edit', [$car->id]) }}">Релактировать</a></div>
    <form action="{{ route('cars.destroy', [$car->id]) }}" method="post">
        @csrf
        @method('DELETE')
        <button class="btn">Удалить</button>
    </form>
</x-layout.main>
