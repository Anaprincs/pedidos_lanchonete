<?php

namespace App\Livewire\Auth;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;


class Login extends Component
{
    public $email;
    public $password;

    public $rules = [
        'email' => 'required|email',
        'password' => 'required|min:6|max:6'
    ];

    //$rules=validar

    protected $messages = [
        'email.required' => 'email obrigatorio',
        'password.required' => 'senha obrigatoria',
        'password.min' => 'a senha deve conter no minimo 6 caracteres',
        'password.max' => ' a senha deve conter no maximo 6 caracteres',

    ];

    // mensagem de validação

    public function login()
    { 
        $this->validate();
        if (Auth::attempt(['email' => $this->email, 'password' => $this -> password])) {
            session()->regenerate();

            if (Auth::user()->role== 'cliente') {
                return redirect()->route('cliente.dashboard');
            }
            if (Auth::user()->role== 'admin') {
                return redirect()->route('admin.dashboard');
            }
            if (Auth::user()->role== 'funcionarios') {
                return redirect()->route('funcionarios.dashboard');
            }

        }
        session()->flash('error', 'Email ou senha incorretos');

    }
//attempt = autenticar


    public function render()
    {
        return view('livewire.auth.login');
    }
}
