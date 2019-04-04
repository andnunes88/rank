<?php

use Illuminate\Database\Seeder;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('categorias')->insert([
        	'cat_nome' => 'Bronze',
        	'cat_meta' => 25000        	
        ]);

        DB::table('categorias')->insert([
        	'cat_nome' => 'Prata',
        	'cat_meta' => 50000        	
        ]);

        DB::table('categorias')->insert([
        	'cat_nome' => 'Ouro',
        	'cat_meta' => 100000        	
        ]);
    }
}
