<x-main :title="$title">
    <div class="container">
        <div class="row pt-5">
        <a class="link-offset-2 link-underline link-underline-opacity-0 fst-italic pt-2" href="{{route('categories.index')}}"> Indietro</a>
            <div class="col-12 col-md-4"></div>
            <div class="col-12 col-md-4">
                <h2>Modifica Categoria</h2>
                @if(session()->has("success"))
                <x-flashmessage />
                @endif
                <x-categoriesform :category="$category" />
            </div>
            <div class="col-12 col-md-4"></div>
        </div>
    </div>
</x-main>