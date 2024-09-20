<x-layout.main title="Бренды">
    @if(session('notification'))
        <div class="alert alert-primary" role="alert">
            {{ session('notification') }}
        </div>
    @endif
    <a href="{{ route('brands.create') }}">Добавить бренд</a>
    <hr>
    @foreach($brands as $brand)

                <div>
                    <a href="{{ route('brands.show', [ $brand->id ]) }}">Бренд:</a>     {{$brand->title}}
                </div>
                <div>
                    Описание: {{$brand->description}}
                </div>
        @foreach($brand->cars as $car)
            <li>
                {{ $car->model }}
            </li>
        @endforeach
        <hr>

    @endforeach
</x-layout.main>
