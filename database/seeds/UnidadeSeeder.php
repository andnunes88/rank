<?php

use Illuminate\Database\Seeder;

class UnidadeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('unidades')->insert([
        	'uni_nome' => 'Rio de Janeiro'        	
        ]);

        DB::table('unidades')->insert([
        	'uni_nome' => 'Macaé'        	
        ]);

        DB::table('unidades')->insert([
        	'uni_nome' => 'São Paulo'        	
        ]);
    }
}
