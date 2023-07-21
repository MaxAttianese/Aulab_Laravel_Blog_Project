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
                            {{$article->category->name}}
                        </div>
                        <div class="card-body d-flex flex-column text-center">
                            @if($article->image)
                            <img src="{{Storage::url($article->image)}}" alt="{{Storage::url($article->image)}}">
                            @endif
                            <h2 class="card-title display-4 pb-3 fw-bold">{{$article->title}}</h2>
                            @if($article->user_id)
                            <span class="fst-italic pb-3 pt-2 ">Scritto da : {{$article->user->name}}</span>
                            @endif
                            <p class="card-text display-6 fst-italic">{{$article->description}}</p>
                        </div>
                    </div>
                </div>
            </div>

        </section>

    </main>
</x-main>