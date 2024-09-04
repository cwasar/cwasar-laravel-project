<x-layout.main title="Машины">
    <a href="{{ route('cars.create') }}">Добавить машину</a><hr>
    @foreach($cars as $car)
        <div>
            <a href="{{ route('cars.show', [$car->id]) }}">Бренд: {{$car->brand}}</a>
        </div>
        <div>
            Модель: {{$car->model}}
        </div>
        <div>
            Год: {{$car->year}}
        </div>
        <div>
            Пробег: {{$car->mileage}}
        </div>
        <div>
            Трансмиссия: {{ $transmission[$car->transmission] }}
        </div>
        <hr>

    @endforeach
</x-layout.main>
