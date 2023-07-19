<x-main :title="$title">
    <main class="pt-4">

        <h2 class="fw-bold text-center pt-4 display-6 pb-3">{{$title}} categorie:</h2>
        <div class="container pt-1">
            <div class="row">
                @foreach($anime as $item)
                <div class="col-12 col-md-6 col-xl-3 p-4">
                    <div class="card pt-3" style="width: 18rem;">
                        <div class="card-body">
                            <p class="card-text fst-italic small">{{$item["count"]}} : Anime</p>
                            <h5 class="card-title fw-bold text-center py-3">{{$item["name"]}}</h5>
                            <div class="d-flex justify-content-center py-2">
                                <a href="{{route('animes.category', $item['mal_id'])}}" class="btn btn-primary">Apri Categoria</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                <div class="py-5 lead text-center fst-italic fw-bold">
                    <a class="link-offset-2 link-underline link-underline-opacity-0" href="{{route('heroes')}}">Visita l'Olimpo degli eroi dei fumetti</a>
                </div>
            </div>
        </div>

    </main>
</x-main>