<x-main :title="$title">
    <div class="container">
        <div class="row pt-5">
        <a class="link-offset-2 link-underline link-underline-opacity-0 fst-italic pt-2" href="{{route('categories.index')}}"> Torna all'elenco delle Categorie</a>
            <div class="col-12 col-md-4"></div>
            <div class="col-12 col-md-4">
                <h2>Crea Categoria</h2>
                <x-categoriesform :category="$category" />
            </div>
            <div class="col-12 col-md-4"></div>
        </div>
    </div>
</x-main>