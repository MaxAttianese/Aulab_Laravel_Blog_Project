<x-main :title="$title">
    <main>
        <section class=" d-flex flex-column py-5">

            <div class="pt-5">
                <h2 class="fw-bold text-center pb-5">
                    {{$title}}
                </h2>
            </div>

            <div class="text-center d-none">
                <livewire:counter />
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6">
                    <livewire:userform />
                    </div>
                    <div class="col-12 col-md-6">
                    <livewire:userlist />
                    </div>
                </div>
            </div>

        </section>
    </main>
</x-main>