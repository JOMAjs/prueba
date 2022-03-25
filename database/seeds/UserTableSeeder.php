<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();

        $int = 4;

        for ($i=0; $i < $int; $i++) { 
            # code...
            $user = new User;
            $user->usuario  = "usuario$i";
            $user->nombre   = "nombre$i";
            //$user->telefono   = "$i";
            $user->direccion   = "direccion$i";
            $user->email   = "email$i@gmail.com";
            $user->password = Hash::make(123456);
            $user->save();
        }
    }
}
