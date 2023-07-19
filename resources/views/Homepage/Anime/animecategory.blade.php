<x-main :title="$title">
    <main class="pt-4">

        <div class="pt-5">

            <a class="text-end ps-5 fst-italic link-underline link-underline-opacity-0" href="{{route('anime')}}">Indietro</a>
        
        </div>
        
        <h2 class="fw-bold text-center pt-3 display-6 pb-3">{{$title}} della categoria scelta:</h2>
        
        <div class="container">
            <div class="row">
                @foreach($anime as $item)
                <div class="col-12 col-md-6 col-xl-4 p-4">
                    <div class="card" style="width: 100%; height:100%;">
                        <img style="height: 300px" src="{{$item['images']['jpg']['image_url']}}" class="card-img-top img-fluid" alt="Copertina Anime">
                        <div class="card-body">
                            <h5 class="card-title">{{$item["title"]}}</h5>
                            <span class="card-text fst-italic small">Duration: {{$item["duration"]}}</span>
                            <p class="card-text">{{$item["synopsis"]}}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

    </main>
</x-main>