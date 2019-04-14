<?php

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
        //
        DB::table('users')->insert([
        	'name' => 'Admin',
        	'password' => Hash::make(123456),
        	'email' => 'admin@admin',
            'tipo' => 'gerente',
            'foto' => 'img/no-photo.png'
        ]);
    }
}
