<?php

namespace App\Livewire\Clientes;

use App\Models\Cliente;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Index extends Component
{
    public $clienteId;
    public $nome;
    public $endereco;
    public $telefone;
    public $cpf;
    public $senha;
    public $email;

    public function mount()
    {
        $cliente = Cliente::find(Auth::user()->cliente->id);

        $this->clienteId = $cliente->id;
        $this->nome = $cliente->nome;
        $this->email = $cliente->email->user->email;
        $this->telefone = $cliente->telefone;
        $this->endereco = $cliente->endereco;
        $this->cpf = $cliente->cpf;
        $this->senha = $cliente->senha->user->password;
    }

    public function salvar()
    {
        $cliente = Cliente::find($this->clienteId);
        $cliente->nome = $this->nome;
        $cliente->email = $this->email;
        $cliente->telefone = $this->telefone;
        $cliente->endereco = $this->endereco;
        $cliente->cpf = $this->cpf;
        $cliente->senha = $this->senha;

        $cliente->save();
        session()->flash('success', 'Cadastro Atualizado');
    }

    public function render()
    {
        $clientes = Cliente::all();
        return view('livewire.clientes.index', compact('clientes'));
    }
}
