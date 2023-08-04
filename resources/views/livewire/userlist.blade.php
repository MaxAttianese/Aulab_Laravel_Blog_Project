
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-1"></div>
            <div class="col-12 col-md-10 d-flex flex-column">
                <h2 class="py-3 fs-2 fw-bold text-center">Lista Utenti</h2>
                <table>
                    <tr>
                        <th class="py-2 fst-italic">
                            Utenti
                        </th>
                    </tr>
                    @foreach($users as $user)
                    <tr>
                        <td class="border-bottom">
                         <span>. {{$user->name}}</span><span class="px-3">{{$user->email}}</span> @if($user->role == "Admin")<span>(Admin)</span>@elseif($user->role == "Editor")<span>(Editor)</span>@endif
                        </td>
                        <td class="border-bottom">
                            <div class="d-flex align-items-center justify-content-end">
                                <button type="submit" class="btn fst-italic text-success" wire:click="editUser({{$user->id}})">Modifica</button>
                                <button type="submit" class="bg-white border-0 fst-italic text-danger" wire:click="deleteUser({{$user->id}})" onclick="return confirm('Sei sicuro di volerlo eliminare?')">Cancella</button>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
            <div class="col-12 col-md-1"></div>
        </div>
    </div>
