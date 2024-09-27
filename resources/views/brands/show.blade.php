<x-layout.main title="" h1="">
    @if(session('notification'))
        <div class="alert alert-primary" role="alert">
            {{ session('notification') }}
        </div>
   @endif
<div class="row">
    <div class="col">
        <div><a href="{{ route('brands.index') }}">Назад</a></div>
        <div>{{ $brand->title }}</div>
        <div>{{ $brand->description }}</div>
        <div><a href="{{ route('brands.edit', [$brand->id]) }}">Редактировать</a></div>
        <form action="{{ route('brands.destroy', [$brand->id]) }}" method="post">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger mt-2">Удалить в корзину</button>
        </form>
    </div>
</div>
        <x-comments.view :model="$brand" />
        <x-comments.create :model="$brand" :id="$brand->id" />
</x-layout.main>
