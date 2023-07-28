        <section class="container">

            <h2 class="fw-bold text-center py-3">Registra utente</h2>



            <form wire:submit.prevent="store" class="row">

                <div class="col-0 col-md-3"></div>
                <div class="col-12 col-md-6">
                    @if($user->id)
                    <div class="text-end">
                        <button class="btn btn-sm btn-primary" wire:click="mount">Pulisci</button>
                    </div>
                    @endif

                    @if(session()->has("success"))
                    <x-flashmessage />
                    @endif
                    <div class="mb-3">
                        <label for="name" class="form-label">Nome</label>
                        <input type="text" class="form-control" id="user.name" name="user.name" wire:model="user.name">
                        @error("user.name") <span class="small text-danger fst-italic">{{$message}}</span> @enderror
                    </div>

                    <div class="mb-3">
                        <label for="role" class="form-label">Ruolo</label>
                        <select class="form-select" aria-label="Default select example" id="role" name="role" wire:model="role">
                            <option selected></option>
                            @foreach(["Admin", "Editor"] as $role)
                            <option value="{{$role}}">{{$role}}</option>
                            @endforeach
                        </select>
                        @error("role") <span class="small text-danger fst-italic">{{$message}}</span> @enderror
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="user.email" name="user.email" wire:model="user.email">
                        @error("user.email") <span class="small text-danger fst-italic">{{$message}}</span> @enderror
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password" wire:model="password">
                        @error("password") <span class="small text-danger fst-italic">{{$message}}</span> @enderror
                    </div>

                    <div class="pb-3">
                    @if($user->id)
                        <button type="submit" class="btn btn-primary px-4">Modifica utente</button>
                    @else
                        <button type="submit" class="btn btn-primary px-4">Registra utente</button>
                    @endif

                    </div>
                </div>
                <div class="col-0 col-md-3"></div>


            </form>
        </section>