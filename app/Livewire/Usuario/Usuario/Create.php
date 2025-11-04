<?php

namespace App\Livewire\Usuario\Usuario;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Create extends Component
{
    public $name;
    public $email;
    public $password;

     protected $rules = [
        'name'=> 'required|min:5|max:80',
        'email' => 'required|min:5|email',
        'password'=> 'required|min:5'
    ];

    protected $messages = [
        'name.required'=> 'O campo nome é obrigatório.',
        'name.min'=> 'O campo nome deve ter no mínimo 5 caracteres.',
        'name.max'=>'O campo nome deve ter no máximo 80 caracteres.',
        'email.required'=> 'O campo email é obrigatório.',
        'email.min'=> 'O campo email deve ter no mínimo 5 caracteres.',
        'email.email'=> 'O campo email está na forma incorreta.',
        'password.required'=> 'O campo senha é obrigatório.',
        'password.min'=> 'O campo senha deve ter no mínimo 5 caracteres.'
    ];

    public function store(){
        $this->validate();

        $usuario = User::create([
            'name'=> $this->name,
            'email'=> $this->email,
            'password'=> Hash::make($this->password)
        ]);

        session()->flash('message', 'Cadastro realizado.');
    }

    public function render()
    {
        return view('livewire.usuario.usuario.create');
    }
}
