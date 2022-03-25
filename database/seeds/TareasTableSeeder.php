<?php

use App\Tarea;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class TareasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Tarea::truncate();

        $int = 20 ;

        for ($i=0; $i < $int; $i++) { 
            # code...
            $tarea = new Tarea;
            $tarea->nombre = "tarea-'.$i'";
            $tarea->fecha_inicio = Carbon::now();
            $tarea->fecha_fin    = Carbon::now();
           // $tarea->estado = "";
            $tarea->save();
        }

        
    }
}
