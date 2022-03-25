<?php

use App\Tarea;
use Illuminate\Database\Seeder;
use Database\Factories\TareaFactory;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       
         $this->call(TareasTableSeeder::class);
         $this->call(UserTableSeeder::class);
    }
}
