<x-layout.main title="" h1="">
    @if(session('notification'))
        <div class="alert alert-primary" role="alert">
        {{ $car->brand }} {{ session('notification') }}
        </div>
   @endif
<div class="row">
<div class="col-6">
<div><a href="{{ route('cars.index') }}">Назад</a></div>
<img width="500" height="500" src="{{ $car->img }}" class="img-fluid" alt="">
<div><a href="{{ route('cars.edit', [$car->id]) }}">Редактировать</a></div>
<form action="{{ route('cars.destroy', [$car->id]) }}" method="post">
    @csrf
    @method('DELETE')
    <button class="btn btn-danger mt-2">Удалить в корзину</button>
</form>
</div>
<div class="col-6">

<div>Бренд: {{ $car->brand }}</div>
<div>Модель: {{ $car->model }}</div>
<div>Год: {{ $car->year }}</div>
<div>Пробег: {{ $car->mileage }}</div>
<div>Трансмиссия: {{ $transmission[$car->transmission] }}</div>
</div>
</div>
</x-layout.main>
