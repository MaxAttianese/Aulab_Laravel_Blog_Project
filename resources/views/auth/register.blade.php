<x-main :title="$title">
    <main>

        <section class="container">

            <h2 class="fw-bold text-center py-5">Registrati</h2>

            <form class="row" action="/register" method="POST">
                @csrf
                <div class="col-0 col-md-3"></div>
                <div class="col-12 col-md-6">

                    <div class="mb-3">
                        <label for="name" class="form-label">Nome</label>
                        <input type="text" class="form-control" id="name" name="name">
                        @error("name") <span class="small text-danger fst-italic">{{$message}}</span> @enderror
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email">
                        @error("email") <span class="small text-danger fst-italic">{{$message}}</span> @enderror
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password">
                        @error("password") <span class="small text-danger fst-italic">{{$message}}</span> @enderror
                    </div>

                    <div class="mb-3">
                        <label for="password_confirmation" class="form-label">Conferma Password</label>
                        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
                    </div>

                    <div class="pb-3">

                        <button type="submit" class="btn btn-primary px-4">Registrati</button>

                    </div>
                </div>
                <div class="col-0 col-md-3"></div>


            </form>
        </section>
    </main>
</x-main>