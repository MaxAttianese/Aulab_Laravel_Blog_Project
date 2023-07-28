<?php

namespace App\Http\Livewire;

use App\Models\User;

use Livewire\Component;

class Userlist extends Component
{
    public $users;

    protected $listeners = ["loadUser"];

    public function loadUser() {

        $this->mount();

        
    }

    public function render()
    {
        return view('livewire.userlist');
    }

    public function mount() {

        $this->users = User::all();
    }

    public function editUser($userId) {

        $this->emitTo("userform", "edit", $userId);
    }

    public function deleteUser($userId) {

        $user = $this->users = User::find($userId);

        $user->delete();

        $this->loadUser();
    }
}
