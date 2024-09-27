@props([
    'model'
])

<section class="comments mt-3">
        <div class="row">
            @foreach($model->comments as $comment)
                <hr>
                <div class="col-10">
                    {{ $comment->comment }}
                </div>
                <div class="col-2 mb-3">
                    {{ $comment->created_at }}
                </div>
                <hr>
            @endforeach

            <hr>

        </div>
</section>
