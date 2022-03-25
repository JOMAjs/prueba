@php
    $contador = 1;
    use App\Enums\EEstado; 
    use Carbon\Carbon; 
@endphp

@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-8 ">
            <div class="card card-body">
                <a class="btn btn-sm btn-primary btn-abrir-formulario mb-3" data-codsucursal="">
                    <i class="fa fa-plus-circle"></i> Nueva Tarea
                </a><hr>
                <h5>Lista de tarea creada</h5>
                <div id="tabla-contenedor">
                    <div class="">
                        <table class="table table table-bordered">
                            <thead class="thead-primary">
                                <tr class="">
                                    <th nowrap scope="col">No.</th>
                                    <th nowrap scope="col">Nombre</th>
                                    <th nowrap scope="col">fecha inicio</th>
                                    <th nowrap scope="col">Fecha final</th>
                                    <th nowrap scope="col">Estado</th>
                                    <th nowrap scope="col">Accion</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($listTarea as $id => $tareas)
                                    <tr>
                                        <td>{{$contador++}}</td>
                                        <td>{{$tareas->nombre}}</td>
                                        <td>{{ Carbon::parse($tareas->fecha_inicio)->diffForHumans() }}</td>
                                        <td>{{ Carbon::parse($tareas->fecha_fin)->subDay()->diffForHumans() }}</td>
                                        <td>{!! EEstado::result($tareas->estado)->getAssistant() ?: 'NO hay estado'!!}</td>
                                        @if (EEstado::index(EEstado::COMPLETADA)->getId() === $tareas->estado)
                                         <td><small>deshabilitado</small></td>
                                        @else 
                                        <td>
                                            <a class="btn btn-sm btn-primary btn-abrir-formulario" data-codtarea="{{$id}}">
                                                <i class="fa fa-angle-right"></i>
                                            </a>
                                            <a class="btn btn-sm btn-danger btn-eliminar" data-codtarea="{{$id}}">
                                                <i class="fa fa-trash"></i>
                                            </a>
                                        </td>
                                        @endif
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4" id="formulario-contenedor">
        </div>
    </div>
</div>
@endsection

@section('scripts')
    <script>
        $(document).on("click", ".btn-abrir-formulario", function(){
            var codtarea = $(this).data("codtarea");
            $.ajax({
                method: "POST",
                headers: {
                    'X-CSRF-TOKEN': $('[name="_token"]').attr('content')
                },
                url: "{{route('tarea.abrir-formulario')}}",
                data: {
                    codtarea: codtarea,
                },
                success: function(respuesta) {
                    console.log(respuesta)
                    $("#formulario-contenedor").html(respuesta.formulario_tarea);
                },
            });
        });
        $(document).on("click", ".btn-eliminar", function(){
            var codtarea = $(this).data("codtarea");
            var confirmacion = window.confirm('¿Desea eliminar la tarea?');
            if(confirmacion){
                $.ajax({
                    method: "POST",
                    headers: {
                        'X-CSRF-TOKEN': $('[name="_token"]').attr('content')
                    },
                    url: "{{route('tarea.eliminar')}}",
                    data: {
                        codtarea: codtarea,
                    },
                    success: function(respuesta) {
                        $("#tabla-contenedor").html(respuesta.table_tarea);
                        $.toast({
                            heading: 'TAREAS',
                            text: 'La tarea se ha eliminado correctamente',
                            position: 'top-right',
                            stack: false,
                            icon: 'success'
                        });
                    },
                });
            }else{
                $.toast({
                    heading: 'Positioning',
                    text: 'peración Cancelada',
                    position: 'top-right',
                    stack: false,
                    icon: 'danger'
                })
            }
            
        });
    </script>
@endsection