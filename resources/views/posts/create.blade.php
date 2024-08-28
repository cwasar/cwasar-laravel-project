<div>
    <h1>Добавить пост</h1>
    <form action="/posts" method="post">
        @csrf
        <label for="">Название</label>
       <div><input type="text" name="title"></div>
        <label for="">Текст</label>
        <div><textarea name="content" id="" cols="30" rows="10"></textarea></div><br>
        <div><button>Add</button></div>
    </form>
</div>
