<x-main :title="$title">
    <main>

        <section class="container pt-2 pb-5 mt-5">

            <div>
                <h2 class="fw-bold text-center pt-4">
                    {{$title}}
                </h2>
            </div>
            <div class="row pt-5">
                @if($articles)
                @foreach($articles as $id => $article)
                <x-card :title="$article->title" :articleId="$article->id" :article="$article" />
                @endforeach
                @else
                <span class="text-center">Nessun articolo disponibile</span>
                @endif
            </div>
        </section>

        <section class="container py-5">
            <div class="pt-5 d-flex justify-content-center">
                <a class="btn btn-primary" href="{{route('articles.create')}}">Clicca ed Inserisci il tuo Articolo</a>
            </div>
        </section>

    </main>
</x-main>