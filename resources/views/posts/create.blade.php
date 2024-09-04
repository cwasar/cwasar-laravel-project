<x-layout.main title="Добавить пост">
<div>
    <h1>Добавить пост</h1>
    <form action="/posts" method="post">
        @csrf
        <x-input label="Post title" name="title" placeholder="Введите название" />
        <br><br>
        <x-input label="Post content" name="content" placeholder="Введите текст" />
        <br><br>
        <div><button>Add</button></div>
    </form>
</div>
</x-layout.main>
