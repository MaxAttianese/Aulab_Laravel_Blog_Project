<div class="col-12 col-md-6 col-xl-3 py-3">
    <div class="card">
        <div class="card-header small">
            {{$category}}
        </div>
        <div class="card-body d-flex flex-column">
            <h5 class="card-title pb-3">{{$title}}</h5>
            <a href="{{route('articles.show', $articleId)}}" class="btn btn-primary">Articolo Completo</a>
        </div>
        <div class="d-flex justify-content-between py-2">
            <a class="btn btn-sm ps-4 text-secondary" href="{{route('articles.edit', $article)}}">Modifica</a>
            <form action="{{route('articles.destroy', $article)}}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-sm pe-4 text-danger">Cancella</button>
            </form>
        </div>
    </div>
</div>