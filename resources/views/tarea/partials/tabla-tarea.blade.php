@php
    $contador = 1;
    use App\Enums\EEstado;
    use Carbon\Carbon;  
@endphp
<div class="table-responsive">
    <table class="table table-bordered">
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

<script>

</script>