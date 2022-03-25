@php
   use App\Enums\EEstado; 
@endphp
<div class="card card-body">
    @if (!blank($tarea->id))
      <h5 class="text-info">Editando Tarea</h5>
    @else
      <h5 class="text-success">Creación de Tareas</h5>
    @endif

    <hr>
    <form id="form-tarea">
        <input type="hidden" name="codtarea" id="codtarea" value="{{$tarea->id}}">
        <div class="form-group">
          <label for="nombre">Nombre</label>
          <input type="text" class="form-control" value="{{$tarea->nombre}}" id="nombre" name="nombre" placeholder="Digite el nombre de la tarea">
        </div>
        <div class="form-group">
          <label for="telefono">Fecha inicio</label>
          <input type="date" class="form-control" value="{{$tarea->fecha_inicio}}" id="fecha_inicio" name="fecha_inicio">
        </div>
        <div class="form-group">
            <label for="telefono">Fecha fin</label>
            <input type="date" class="form-control" value="{{$tarea->fecha_fin}}" id="fecha_fin" name="fecha_fin">
        </div>
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

        @if (!blank($tarea->id))
          <button  class="btn btn-success btn-block btn-sm ">Editando</button>
        @else
          <button  class="btn btn-success btn-block btn-sm ">Guardar</button>
        @endif        
        <button type="reset" class="btn btn-danger btn-block btn-sm ">Cancelar</button>
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
        nombre: {
          required: true
        },

        fecha_inicio: {
          required: true
        },

        fecha_fin: {
          required: true
        },
      },
      messages: {
        nombre: {
          required: "El campo nombre  es requerido",
        },

        fecha_inicio: {
          required: "El campo fecha inicio es requerido",
        },

        fecha_fin: {
          required: "El campo fecha final es requerido",
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


</script>
