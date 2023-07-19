<x-main :title="$title">
    <main>

        <div class="pt-5">
            <a class="text-end ps-5 fst-italic link-underline link-underline-opacity-0" href="{{route('articles.index')}}">Indietro</a>
        </div>

        <section class="container pt-5">

            <div>

                <h2 class="fw-bold text-center pb-5">
                    {{$title}}
                </h2>
            </div>
            <div class="row justify-content-center">
                <div class="col-12 col-md-6 col-xl-4 pb-2">
                    <div class="card">
                        <div class="card-header small">
                            {{$article->category}}
                        </div>
                        <div class="card-body d-flex flex-column">
                            @if($article->image)
                            <img src="{{Storage::url($article->image)}}" alt="{{Storage::url($article->image)}}">
                            @endif
                            <h2 class="card-title display-5 pb-3">{{$article->title}}</h2>
                            <p class="card-text lead">{{$article->description}}</p>
                        </div>
                    </div>
                </div>
            </div>

        </section>

    </main>
</x-main>