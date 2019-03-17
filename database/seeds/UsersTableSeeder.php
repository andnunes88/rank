<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $usuario = new User();
        $usuario->name = "admin";
        $usuario->email = "admin@admin";
        $usuario->password = bcrypt("master");
        $usuario->save();

    }
}
