<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- CSRF Token -->
    <meta name="_token"  content="{{ csrf_token() }}">

    <title>Prueba</title>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{asset('template/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link rel="stylesheet" href="{{asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link href="{{asset('template/css/sb-admin-2.min.css')}}" rel="stylesheet">
    <link href="{{asset('plugins/toast/src/jquery.toast.css')}}" rel="stylesheet">

</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/tareas') }}">
                  Tu {{ Auth::user()->nombre }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        @guest
                            @else
                            <li class="nav-item">
                                <a class="btn btn-link text-decoration-none" href="{{ route('tarea.home') }}">Crear Tarea</a>
                                <a class="btn btn-link text-decoration-none" href="{{ route('tarea.reporte') }}">Mostrar Tarea</a>
                            </li>
                        @endguest
                      
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                           
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                        <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                             Cerrar sesión
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <div class="py-4 " id="content">
            @yield('content')
        </div>
    </div>

      <!-- Bootstrap core JavaScript-->
      <script src="{{asset('template/vendor/jquery/jquery.min.js')}}"></script>
      <script src="{{asset('template/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  
      <!-- Core plugin JavaScript-->
      <script src="{{asset('template/vendor/jquery-easing/jquery.easing.min.js')}}"></script>
  
      <!-- Custom scripts for all pages-->
      <script src="{{asset('template/js/sb-admin-2.min.js')}}"></script>
  
      <!-- Page level plugins -->
      <script src="{{asset('plugins/toast/src/jquery.toast.js')}}"></script>

      <script src="{{asset('plugins/datatables/jquery.dataTables.min.js')}}"></script>
      <script src="{{asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
      


         <!-- jquery-validation -->
         <script src="{{asset('plugins/jquery-validate/jquery-validate.js') }}"></script>
         <script src="{{asset('plugins/jquery-validate/additional-methods.min.js') }}"></script>
         <script src="{{asset('plugins/jquery-validate/messages_es.min.js') }}"></script>
     <script>
         $(function () {
             $(".table").dataTable();
        });
     </script>
       @yield('scripts')

</body>
</html>
