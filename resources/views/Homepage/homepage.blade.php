<x-main :title="$title">
    <main>
        <section class=" d-flex flex-column py-5">

            <div class="pt-5">
                <h2 class="fw-bold text-center pb-5">
                    {{$title}}
                </h2>
            </div>
            <div>
                <p class="display-6 fst-italic text-center">
                    {{$description}}
                </p>
            </div>

            <div class="container pt-5">
                <div class="row">
                    <h2 class="fw-bold text-center">Accedi alle nostre sezioni</h2>

                    <div class="col-12 col-md-3 pt-5">
                        <div class="card" style="width: 18rem;">
                            <div class="card-body">
                                <p class="card-text fst-italic small">Articoli</p>
                                <h5 class="card-title fw-bold text-center py-3">Articoli</h5>
                                <div class="d-flex justify-content-center py-2">
                                    <a href="{{route('articles.index')}}" class="btn btn-primary">Apri Sezione</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-3 pt-5">
                        <div class="card" style="width: 18rem;">
                            <div class="card-body">
                                <p class="card-text fst-italic small">Anime</p>
                                <h5 class="card-title fw-bold text-center py-3">Anime</h5>
                                <div class="d-flex justify-content-center py-2">
                                    <a href="{{route('anime')}}" class="btn btn-primary">Apri Sezione</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-3 pt-5">
                        <div class="card" style="width: 18rem;">
                            <div class="card-body">
                                <p class="card-text fst-italic small">Contattaci</p>
                                <h5 class="card-title fw-bold text-center py-3">Contattaci</h5>
                                <div class="d-flex justify-content-center py-2">
                                    <a href="{{route('contacts')}}" class="btn btn-primary">Apri Sezione</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-3 pt-5">
                        <div class="card" style="width: 18rem;">
                            <div class="card-body">
                                <p class="card-text fst-italic small">Chi Sono</p>
                                <h5 class="card-title fw-bold text-center py-3">Chi sono</h5>
                                <div class="d-flex justify-content-center py-2">
                                    <a href="{{route('aboutMe')}}" class="btn btn-primary">Apri Sezione</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </section>
    </main>
</x-main>