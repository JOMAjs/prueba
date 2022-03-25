<?php

namespace App\Http\Controllers;

use App\Tarea;
use Carbon\Carbon;
use App\Enums\EEstado;
use Illuminate\Http\Request;
use App\Http\Requests\SaveTareaRequest;

class TareasController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    
    public function index()
    {
        
        $listTarea = [];
        foreach(Tarea::all() as $tarea){
            $listTarea[$tarea->id] = $tarea;
        }

        return view('tarea.index', [
            'listTarea' => $listTarea,
        ]);

    }

    public function reporte()
    {
        
      

        return view('tarea.mostrar_reporte', [
            'listTarea' => Tarea::where('estado',1)->count(),
        ]);

    }

    public function create(Request $request)
    {
        if (!blank($request->codtarea) ) {
            # code...
            $tareas = Tarea::find($request->codtarea);
            $tareas->nombre       = $request->nombre;
            $tareas->fecha_inicio = $request->fecha_inicio;
            $tareas->fecha_fin    = $request->fecha_fin;
            $tareas->estado       = $request->estado;
            $tareas->update();
            
        }else {
            # code...
            $tareas = new Tarea();
            $tareas->nombre = $request->nombre;
            $tareas->fecha_inicio = $request->fecha_inicio;
            $tareas->fecha_fin = $request->fecha_fin;
            //$tareas->estado = EEstado::index(EEstado::INICIADA)->getId();
            $tareas->save();
 
        }
 
        $listTarea = [];
        foreach(Tarea::all() as $tarea){
            $listTarea[$tarea->id] = $tarea;
        }
 
        return response()->json([
            '0' => $request->all(),
            'tabla_tarea' => view('tarea.partials.tabla-tarea', [
                'listTarea' => $listTarea
            ])->render(),
        ]);
    }

    public function show(Request $request)
    {
        $tareas = blank($request->codtarea) ? new Tarea() : Tarea::find($request->codtarea);
        return response()->json([
          'formulario_tarea' => view('tarea.partials.form-tarea', [
              'tarea' => $tareas
          ])->render(),
        ]); 
    }


    public function destroy(Request $request)
    {  
       
        Tarea::destroy($request->codtarea);
        $listTarea = [];
        foreach(Tarea::all() as $tarea){
            $listTarea[$tarea->id] = $tarea;
        }

        return response()->json([
            '0' => $request->all(),
            'table_tarea' => view('tarea.partials.tabla-tarea', [
                'listTarea' => $listTarea
            ])->render(),
        ]);

    }
}
