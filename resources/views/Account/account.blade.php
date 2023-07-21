<x-main :title="$title">
<main>
<section class=" d-flex flex-column py-5 mt-5">
    
    <div class="pt-5">
        <h2 class="fw-bold text-center pb-5">
           Benvenuto: {{auth()->user()->name}} - {{auth()->user()->email}}
        </h2>
    </div>
    <div class="d-flex justify-content-center">
        <a class="btn btn-primary" href="{{route('homepage')}}">Accedi alla Homepage</a>
    </div>
    <div class="d-flex justify-content-center pt-5">
        <a class="btn btn-primary" href="{{route('account.articles')}}">Visualizza gli articoli caricati da te</a>
    </div>
</section>
</main>
</x-main>