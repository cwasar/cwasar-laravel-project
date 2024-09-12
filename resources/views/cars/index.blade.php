@php
    $curPage = Request::path();
    $curPage = explode('/', $curPage)[0];
@endphp
<x-layout.main title="Машины">
    @if(session('notification'))
        <div class="alert alert-primary" role="alert">
            {{ session('notification') }}
        </div>
    @endif
    <a href="{{ route('cars.create') }}">Добавить машину</a>
    <hr>
    @foreach($cars as $car)
        <div class="row p-2  {{ $curPage == 'trash' ? 'bg-info bg-gradient' : '' }} ">
            <div class="col-2">
                <img width="150" height="150" class="img-fluid" src="{{ $car->img }}" alt="">
            </div>
            <div class="col-10">
                <div>
                    @if($curPage == 'cars')
                    <a href="{{ route('cars.show', [$car->id]) }}">Бренд: {{$car->brand}}</a>
                    @else
                        Бренд: {{$car->brand}}
                    @endif
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
                <div>
                    {{ $car->deleted_at ? "Удалена: $car->deleted_at" : '' }}
                </div>
            </div>
            @if($car->deleted_at)
                <div>
                    <form action="{{ route('trash.restore', [$car->id]) }}" method="post">
                        @csrf
                        @method('PUT')
                        <button class="btn btn-success">Восстановить</button>
                    </form>
                </div>
                <div class="mt-3">
                    <form action="{{ route('trash.forceDelete', [$car->id]) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger">Удалить из БД</button>
                    </form>
                </div>
            @endif
        </div>
        <hr>

    @endforeach
</x-layout.main>
