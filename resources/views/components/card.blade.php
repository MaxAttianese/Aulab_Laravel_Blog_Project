<div class="col-12 col-md-6 col-xl-3 py-3">
    <div class="card" style="height: 200px">
        <div class="card-header small d-flex justify-content-between">
            <span>{{$category}}</span><div class="fst-italic"><span class="small">Scritto da: </span> <span class="fw-bold">{{$article->user->name}}</span></div>
        </div>
        <div class="card-body d-flex flex-column">
            <h5 class="card-title pb-3">{{$title}}</h5>
            <a href="{{route('articles.show', $articleId)}}" class="btn btn-primary">Articolo Completo</a>
        </div>
        @if($article->user_id == auth()->user()->id)
        <div class="d-flex justify-content-between py-2">
            <a class="btn btn-sm ps-4 text-secondary" href="{{route('articles.edit', $article)}}">Modifica</a>
            <form action="{{route('articles.destroy', $article)}}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-sm pe-4 text-danger">Cancella</button>
            </form>
        </div>
        @endif
    </div>
</div>