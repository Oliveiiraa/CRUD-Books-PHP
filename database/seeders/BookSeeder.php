<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ModelBook;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(ModelBook $book)
    {
        $book->create([
            'title'=>'Guia do Mochileiro das Galáxias Parte 1',
            'pages'=> '250',
            'price'=>'24.90',
            'id_user'=>'1', 
        ]);

        $book->create([
            'title'=>'Guia do Mochileiro das Galáxias Parte 2',
            'pages'=> '170',
            'price'=>'27.90',
            'id_user'=>'2', 
        ]);

        $book->create([
            'title'=>'Guia do Mochileiro das Galáxias Parte 3',
            'pages'=> '289',
            'price'=>'29.90',
            'id_user'=>'1', 
        ]);
    }
}
