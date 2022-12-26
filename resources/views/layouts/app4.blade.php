<!DOCTYPE html>
<html>
  <head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.css">
    <link rel="stylesheet" href="{{asset('css/footer.css')}}">
    <title>@yield('title')</title>
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  </head>

  <div class="parallax-container">
    <div class="parallax"><img src="{{ asset('img/a3.gif') }}"></div>
  </div>
  <div class="section deep-orange darken-4">
    <div class="row container">
      <h2 class="header">BIENVENIDOS</h2>
      <p class="black-text text-darken-3 lighten-3">Pantalla de muestra</p>
    </div>
  </div>
  <div class="parallax-container">
    <div class="parallax"><img  src="{{ asset('img/a4.gif') }}"></div>
  </div>
  
  <body> 
    <!-- Navbar goes here -->
    @section('header')
  <header>
    <!-- Dropdown Structure -->
<ul id="dropdown1" class="dropdown-content writhe">
  <li><a href="#!">Hola</a></li>
  <li><a href="#!">que</a></li>
  <li class="divider"></li>
  <li><a href="#!">hace</a></li>
</ul>
<nav>
  <div class="nav-wrapper">
    <ul class="right hide-on-med-and-down">
      <!-- Dropdown Trigger -->
      <li><a class="dropdown-trigger" href="#!" data-target="dropdown1">Empresas<i class="material-icons right">arrow_drop_down</i></a></li>
    </ul>
  </div>
</nav>



    @section('menu')
    @include('template.menu')
    @show
  </header>
    @show


    <!-- Page Layout here -->
   <main>
         <div class="container-main row">
         @yield('content') 
         </div>
  </main>
      
        @section('footer')

            @include('template.footer')
        
        @show

    <!--JavaScript at end of body for optimized loading-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.2.js" integrity="sha256-pkn2CUZmheSeyssYw3vMp1+xyub4m+e+QK4sQskvuo4=" crossorigin="anonymous"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.js"></script>
    <script>M.AutoInit();
    $(document).ready( function () {
    $('#table_id').DataTable();
} );
    </script> 
  </body>
</html>