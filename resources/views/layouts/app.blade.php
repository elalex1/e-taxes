<!DOCTYPE html>
<html>
  <head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.css">

    <title>@yield('title')</title>
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  </head>

  <body>
   
   
    <!-- Navbar goes here -->
    @section('header')
    <nav>
        <div class="nav-wrapper white">
            <div class="row">
                <div class="col s9 offset-s3 black-text">
                    <h5>@yield('title')</h5>
                </div>
            </div>
           
          {{--<a href="#" class="brand-logo offset-s4">Logo</a>
          <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><span>Hola</span></li>
            <li><a href="badges.html">Components</a></li>
            <li><a href="collapsible.html">JavaScript</a></li>
          </ul>--}}
        </div>
      </nav>
    @show

    <!-- Page Layout here -->
    <div class="row">

        <div class="col s3">
          <!-- Grey navigation panel -->
        @section('menu')
        @include('template.menu')
        @show
        </div>
  
        <div class=" grey lighten-5">
            @yield('content') 
        </div>

        <div class="col s9 offset-s3">
            @include('template.footer')
        </div>
        
  
      </div>

      @include('modals.CrearEmpresa')

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