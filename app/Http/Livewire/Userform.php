<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Models\User;

class Userform extends Component
{
    /*public $name;

    public $email;*/

    public $user;

    public $role;

    public $password;

    protected $listeners = ["edit"];

    /*protected $rules = [
        "user.name" => "required",
        "user.email" => "required|email|unique:users,email",
        "password" => "required",
    ];*/

    public function rules() {

        return [
            "user.name" => "required",
            "user.email" => "required|email|unique:users,email," . $this->user->id,
            "role" => "required",
            "password" => "required",
        ];
    }

    protected $messages = [
        "user.name.required" => "Il campo è obbligatorio",
        "user.email.required" => "Il campo è obbligatorio",
        "role.required" => "Il campo è obbligatorio",
        "password.required" => "Il campo è obbligatorio",
    ];

    public function store() {
        
        $this->validate();

        /*User::create([ 
            "name" => $this->name,
            "email" => $this->email,
            "password" => \Illuminate\Support\Facades\Hash::make($this->password),
        ]);*/

        $this->user->password = \Illuminate\Support\Facades\Hash::make($this->password);

        $this->user->role = $this->role;

        $this->user->save();

        session()->flash("success", "Operazione avvenuta con successo");

        //$this->resetForm();

        $this->mount();

        $this->emitTo("userlist", "loadUser");
        
    }

    public function render()
    {
        return view('livewire.userform');
    }

    /*public function resetForm() {

        $this->name = "";

        $this->email = "";

        $this->password = "";

    }*/

    public function mount() {

        $this->user = new User;

        $this->role = "";

        $this->password = "";
        
    }

    public function edit($userId) {

        $this->user = User::find($userId);

        $this->role = $this->user->role;

        $this->user->password = "";
    }
    
}
