<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $v= [
            ['nome' => 'Lucas'],
            ['nome' => 'Carlos'],
            ['nome' => 'Marcos'],
            ['nome' => 'João'],
            ['nome' => 'Karina'],
            ['nome' => 'Ana'],
            ['nome' => 'Leticia']
        ];
        Usuario::insert($v);
            

        
    }
}