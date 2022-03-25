@php
   use App\Enums\EEstado;
   use Carbon\Carbon;  
@endphp

<div class="card card-body">
    @if (!blank($tarea->id))
      <h5 class="text-info">{{$tarea->nombre}}</h5>
    @endif
    <label for="">Fecha de enterga</label>
    <div class="form-row">
        <div class="col-md-12">
            <h5 class="text-dark">{{ Carbon::parse($tarea->fecha_inicio)->subDay()->diffForHumans() }} Hasta {{ Carbon::parse($tarea->fecha_fin)->subDay()->diffForHumans() }} </h5>
        </div>
    </div>
    <form id="form-tarea">
        <input type="hidden" name="nombre" value="{{$tarea->nombre}}">
        <input type="hidden" name="codtarea" id="codtarea" value="{{$tarea->id}}">
        @if (!blank($tarea->id))
            <div class="form-group">
                <label for="estado">Estado</label>
                <select name="estado" id="estado" class="form-control">
                        <option value="">seleccione</option>
                    @foreach (EEstado::data() as $estado)
                        <option value="{{ $estado->getId() }}" {{ $tarea->estado == $estado->getId()  ? 'selected' : '' }} > {{ $estado->getDescription() }} </option>                                    
                    @endforeach
                </select>
            </div>
       @endif 
       <button  class="btn btn-success btn-block btn-sm ">Guardar</button>
    </form>
</div>


<script>
    $('#form-tarea').validate({
      submitHandler: function() {
          $.ajax({
            url: "{{route('tarea.guardar')}}",
            method: "POST",
            headers: {
                'X-CSRF-TOKEN': $('[name="_token"]').attr('content')
            },
            data: $("#form-tarea").serialize(), 
            success: function(respuesta) {
                console.log(respuesta);
                $("#tabla-contenedor").html(respuesta.tabla_tarea);
                $("#formulario-contenedor").html('');
                $.toast({
                    heading: 'TAREAS',
                    text: 'La tarea se ha guardado correctamente',
                    position: 'top-right',
                    stack: false,
                    icon: 'success'
                })
            } 
          });
        return false;
       }, 
      
      rules: {
        estado: {
          required: true
        },
      },
      messages: {
        estado: {
          required: "El campo estado es requerido",
        },
      
      },
      errorElement: 'span',
      errorPlacement: function (error, element) {
        error.addClass('invalid-feedback');
        element.closest('.form-group').append(error);
      },
      highlight: function (element, errorClass, validClass) {
        $(element).addClass('is-invalid');
      },
      unhighlight: function (element, errorClass, validClass) {
        $(element).removeClass('is-invalid');
      }
    });