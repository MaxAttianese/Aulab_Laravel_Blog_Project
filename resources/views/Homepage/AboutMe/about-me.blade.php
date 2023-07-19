<x-main :title="$title">
    <main>

        <section class=" d-flex flex-column py-5">

            <div>
                <h2 class="fw-bold text-center pb-5">
                    {{$title}}
                </h2>
            </div>
            <div>
                <p class="display-6 fst-italic text-center">
                    {{$description}}
                </p>
            </div>

        </section>

        <footer class="pt-4 text-center">

            <h2>
                {{env("APP_NAME")}}
            </h2>

            <p class="pt-5">
                Lingua dell' applicazione : {{config("app.locale")}}
            </p>
        </footer>
    </main>
</x-main>