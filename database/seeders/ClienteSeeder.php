<?php

namespace Database\Seeders;

use App\Models\Cliente;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class ClienteSeeder extends Seeder
{
    public function run()
    {
    
            Cliente::create([
                'nome' => 'Cliente Teste',
                'endereco' => 'Rua Exemplo, 123',
                'telefone' => '11999999999',
                'cpf' => '12345678901',
                'email' => 'cliente@teste.com',
                'password' => Hash::make('password123'),
        ]);
    }
}