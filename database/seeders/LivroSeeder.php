<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LivroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('livros')->insert([
            'titulo' => 'Livro Vol.1',
            'autor' => 'Primeiro Autor',
            'paginas' => 100,
            'sinopse' => 'É o primeiro livro do primeiro autor',
            'preco' => 39.99
        ]);

        DB::table('livros')->insert([
            'titulo' => 'Livro Vol.2',
            'autor' => 'Primeiro Autor',
            'paginas' => 150,
            'sinopse' => 'É o segundo livro do primeiro autor',
            'preco' => 49.99
        ]);
    }
}
