<x-main :title="$title">
    <main>

        <div class="pt-5">
            <a class="text-end ps-5 fst-italic link-underline link-underline-opacity-0" href="{{route('articles.index')}}">Indietro</a>
        </div>

        <section class="container">

            <div>

                <h2 class="fw-bold text-center">
                    {{$title}}
                </h2>
            </div>
            <div class="row justify-content-center py-4">
                <div class="col-12 col-md-6 col-xl-4 pb-2">
                    <div class="card">
                        <div class="card-header small">
                        <div>@foreach($article->categories as $category) <span class="fst-italic pe-1">.{{$category->name}}</span> @endforeach</div>
                        </div>
                        <div class="card-body d-flex flex-column text-center">
                            @if($article->image)
                            <img src="{{Storage::url($article->image)}}" style="height: 200px" alt="{{$article->title}}">
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