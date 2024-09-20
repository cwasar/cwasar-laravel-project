<x-layout.main title="Добавить бренд" h1="Добавить бренд">
    <form action="{{ route('brands.store') }}" method="post">
        @csrf
        <x-input label="Название" name="title" />
        <div><select name="country_id" id="">
            @foreach($countries as $country)
                <option value="{{ $country->id }}">{{ $country->title }}</option>
            @endforeach

        </select>
        </div>
        <x-input label="Описание" name="description" />
        <div class="mt-3">
            <button class="btn btn-primary">Добавить</button>
        </div>
    </form>
</x-layout.main>
