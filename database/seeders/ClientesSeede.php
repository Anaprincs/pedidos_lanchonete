<?php

namespace Database\Seeders;

use App\Models\Cliente;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClientesSeede extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i <= 400; $i++) {
        Cliente::create([
            'nome' => 'Ana '.$i,
            'endereco' => 'Sebastião Ferreira dos Santos ',
            'email' => 'ana'.$i.'@senai.br',
            'telefone' => ' 18 9825687',
            'cpf' => '194700000',
            'password' => '23456789'
        ]);
    }
}
}
