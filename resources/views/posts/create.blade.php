<div>
    <h1>Добавить пост</h1>
    <form action="/posts" method="post">
        @csrf
        <label for="">Название</label>
       <div><input type="text" name="title" value="{{ old('title') }}"></div>
        <label for="">Текст</label>
        <div><textarea name="content" id="" cols="30" rows="10">{{ old('content') }}</textarea></div><br>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div><button>Add</button></div>
    </form>
</div>
