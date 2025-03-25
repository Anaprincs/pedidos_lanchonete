<?php

namespace App\Livewire\Clientes;

use Livewire\Component;

class Create extends Component
{

public $nome;
public $endereco;
public $telefone;
public $cpf;
 


    public function render()
    {
        return view('livewire.clientes.create');
    }
}
