<x-main :title="$title">
    <main>
        <section class=" d-flex flex-column pt-5">

            <div>

                <h2 class="fw-bold text-center pb-4">
                    {{$title}}
                </h2>

            </div>

            <div>

                <p class="display-6 fst-italic text-center">
                    {{$description}}
                </p>

            </div>

        </section>

        <section class="container pt-3">

            <form class="row" action="{{route('contacts.data')}}" method="POST">
                @csrf

                <div class="col-0 col-md-3"></div>
                <div class="col-12 col-md-6">


                    <div class="mb-3">
                        <label for="nameUser" class="form-label">Nome</label>
                        <input type="text" class="form-control" id="nameUser" name="nameUser" aria-describedby="NameHelp" placeholder="Max" value="{{old('nameUser')}}">
                        @error("nameUser") <span class="small text-danger fst-italic">{{$message}}</span> @enderror
                    </div>
                    <div class="mb-3">
                        <label for="emailUser" class="form-label">Email</label>
                        <input type="email" class="form-control" id="emailUser" name="emailUser" aria-describedby="EmailHelp" placeholder="Max@example.it" value="{{old('emailUser')}}">
                        @error("emailUser") <span class="small text-danger fst-italic">{{$message}}</span> @enderror

                        <div id="EmailHelp" class="form-text"></div>
                    </div>
                    <div class="mb-3">
                        <label for="textUser" class="form-label">Inserisci Testo</label>
                        <textarea type="text" rows="4" cols="50" class="form-control" id="textUser" name="textUser" placeholder="Scrivi il tuo messaggio per noi">{{old('textUser')}}</textarea>
                        @error("textUser") <span class="small text-danger fst-italic">{{$message}}</span> @enderror

                    </div>

                    @if(session()->has("success"))

                    @else
                    <button type="submit" class="btn btn-primary">Invia Richiesta</button>
                </div>
                <div class="col-0 col-md-3"></div>
                @endif

            </form>
        </section>

    </main>
</x-main>