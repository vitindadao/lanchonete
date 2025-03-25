<?php

namespace Database\Seeders;

use App\Models\Produto;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProdutoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        
            {
                Produto::create([
                    'nome' => 'X-Burger',
                    'ingredientes' => 'Pão, Hambúrguer, Queijo, Alface, Tomate, Molho Especial',
                    'valor' => 15.90,
                    'imagem' => 'x-burger.jpg',
                ]);
            }
        }
        
    }

