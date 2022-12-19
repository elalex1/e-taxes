<!DOCTYPE html>
<html>
  <head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <title>@yield('title')</title>
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  </head>

  <body>
    <!-- Start Page Loading -->
    <div id="loader-wrapper">
      <div id="loader"></div>
      <div class="loader-section section-left"></div>
      <div class="loader-section section-right"></div>
    </div>
    <!-- End Page Loading -->
    @section('header')
    <header class="white">
      <nav class="white red-text top-nav">
        <a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        <div class="nav-wrapper" style="padding: 0% 2%;">
          <h5 >@yield('title')</h5>
          
        </div>
      </nav>
      @section('menu')
          @include('template.menu')
      @show
  
    </header>
    @show
  
  
    <main>
  
      <div class="container-main">
        @yield('content')
      </div>
    </main>
  
    @section('footer')
      @include('template.footer')
    @show
  

    <!--JavaScript at end of body for optimized loading-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script>M.AutoInit();</script>
  </body>
</html>