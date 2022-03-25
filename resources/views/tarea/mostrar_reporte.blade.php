@php
    $contador = 1;
    use App\Enums\EEstado; 
    use Carbon\Carbon; 
@endphp

@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card card-body">
                <div class="card-card-title"><h6>Mostrar la cantidades de tarea</h6></div>
                <hr>
                @foreach (EEstado::data() as $es)
                    <ul class="list-group">
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            {!! EEstado::result($es->getId())->getAssistant() !!} 
                          <span class="badge badge-primary badge-pill">
                           {{ DB::table('tareas')->where('estado',$es->getId())->count() }}    
                          </span>
                        </li>
                    </ul>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
 
@endsection