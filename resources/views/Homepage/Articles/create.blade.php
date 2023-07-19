<x-main :title="$title">
    <main>
        <section class="container pt-5">

            <div>
                <a class="text-end ps-5 fst-italic link-underline link-underline-opacity-0" href="{{route('articles.index')}}">Indietro</a>
            </div>
            <x-articlesform :article="$article" :categories="$categories" />
        </section>
    </main>
</x-main>