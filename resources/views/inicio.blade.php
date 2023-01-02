@extends('layouts.app')
@section('title','inicio')
@section('content')

<div class="col offset-s3">
  <h4 id="saludo"></h4>

  <div class="col s4">
    <div class="card blue-grey darken-1">
      <div class="card-content white-text">
        <span class="card-title">Card Title</span>
        <p>I am a very simple card. I am good at containing small bits of information.
        I am convenient because I require little markup to use effectively.</p>
      </div>
      <div class="card-action">
        <a href="#">This is a link</a>
        <a href="#">This is a link</a>
      </div>
    </div>
  </div>

  <div class="col s4">
    <div class="card blue-grey darken-1">
      <div class="card-content white-text">
        <span class="card-title">Card Title</span>
        <p>I am a very simple card. I am good at containing small bits of information.
        I am convenient because I require little markup to use effectively.</p>
      </div>
      <div class="card-action">
        <a href="#">This is a link</a>
        <a href="#">This is a link</a>
      </div>
    </div>
  </div>

  <div class="col s4">
    <div class="card blue-grey darken-1">
      <div class="card-content white-text">
        <span class="card-title">Card Title</span>
        <p>I am a very simple card. I am good at containing small bits of information.
        I am convenient because I require little markup to use effectively.</p>
      </div>
      <div class="card-action">
        <a href="#">This is a link</a>
        <a href="#">This is a link</a>
      </div>
    </div>
  </div>

  <div class="col s4">
    <div class="card blue-grey darken-1">
      <div class="card-content white-text">
        <span class="card-title">Card Title</span>
        <p>I am a very simple card. I am good at containing small bits of information.
        I am convenient because I require little markup to use effectively.</p>
      </div>
      <div class="card-action">
        <a href="#">This is a link</a>
        <a href="#">This is a link</a>
      </div>
    </div>
  </div>

  <div class="col s4">
    <div class="card blue-grey darken-1">
      <div class="card-content white-text">
        <span class="card-title">Card Title</span>
        <p>I am a very simple card. I am good at containing small bits of information.
        I am convenient because I require little markup to use effectively.</p>
      </div>
      <div class="card-action">
        <a href="#">This is a link</a>
        <a href="#">This is a link</a>
      </div>
    </div>
  </div>

</div>

  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>    
  <script type="text/javascript">
    $(document).ready(function() {
   var hoy = new Date();
   var hora = hoy.getHours();
   console.log(hora);
   var fecha = "";
   var mensaje= "";
   nombre = '{{Session::get('empresa_nombre')}}';
   console.log(nombre);
   
   if(hora > 5 && hora<12){
           var fecha = "Buenos dias {{ Session::get('name') }}!";
           var mensaje= "Es buena momento tomar una taza de cafe para empezar el dia!";
       }
       else if (hora > 11 && hora<20){
           var fecha = "Buenas tardes {{ Session::get('name') }}!";
           var mensaje= "Como va tu dia?";
       }
       else if (hora > 19 && hora<25){
           var fecha = "Buenas Noches {{ Session::get('name') }}!";
           var mensaje= "Descanza";
       }
       else if (hora > -1  && hora<6){
           var fecha = "Buenas Madrugadas {{ Session::get('name') }}!";
           var mensaje= "Ya duermete ";
       }
   
       document.getElementById('saludo').innerHTML = fecha + " " + nombre;
       document.getElementById('mensaje').innerHTML = mensaje;
       
    });
   </script>
@endsection