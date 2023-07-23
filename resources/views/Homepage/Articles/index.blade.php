<x-main :title="$title">
    <main>

        <section class="container pt-2 pb-5">

            <div>
                <h2 class="fw-bold text-center pt-4">
                    {{$title}}
                </h2>
            </div>
            @if(session()->has("success"))
            <x-flashmessage />
            @endif
            <div class="row pt-5">
                @if($articles)
                @foreach($articles as $id => $article)
                <x-card :categories="$article->categories" :title="$article['title']" :articleId="$article['id']" :article="$article" />
                @endforeach
                @else
                <span class="text-center">Nessun articolo disponibile</span>
                @endif
            </div>
            {{$articles->links()}}
        </section>

        <section class="container py-5">
            <div class="pt-5 d-flex justify-content-center">
                <a class="btn btn-primary" href="{{route('articles.create')}}">Clicca ed Inserisci il tuo Articolo</a>
            </div>
        </section>

    </main>
</x-main>