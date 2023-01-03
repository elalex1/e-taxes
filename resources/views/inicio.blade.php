@extends('layouts.app')
@section('title','inicio')
@section('content')

<div class="col offset-s3">
  <h4 id="saludo"></h4>

  <div class="col s4">
    <div class="card ">
      <div class="card-content">
        <a class="black-text" href="{{ asset('/Ingresos') }}"><span class="card-title center-align">Ingresos</span></a>
        <p>I am a very simple card. I am good at containing small bits of information.
        I am convenient because I require little markup to use effectively.</p>
      </div>
      <div class="card-action">
        
      </div>
    </div>
  </div>

  <div class="col s4">
    <div class="card">
      <div class="card-content">
        <a class="black-text" href="{{ asset('/Egresos') }}"><span class="card-title center-align">Egresos</span></a>
        <p>I am a very simple card. I am good at containing small bits of information.
        I am convenient because I require little markup to use effectively.</p>
      </div>
      <div class="card-action">
        
      </div>
    </div>
  </div>

  <div class="col s4">
    <div class="card ">
      <div class="card-content">
        <a class="black-text" href="{{ asset('/Costos') }}"><span class="card-title center-align">Costos Fijos</span></a>
        <p>I am a very simple card. I am good at containing small bits of information.
        I am convenient because I require little markup to use effectively.</p>
      </div>
      <div class="card-action">
        
      </div>
    </div>
  </div>

  <div class="col s4">
    <div class="card ">
      <div class="card-content">
        <a class="black-text" href="{{ asset('/Pagos') }}"><span class="card-title center-align">Pagos</span></a>
        <p>I am a very simple card. I am good at containing small bits of information.
        I am convenient because I require little markup to use effectively.</p>
      </div>
      <div class="card-action">
       
      </div>
    </div>
  </div>

  <div class="col s4">
    <div class="card">
      <div class="card-content">
        <a class="black-text" href="{{ asset('/Nominas') }}"><span class="card-title center-align">Nominas</span></a>
        <p>I am a very simple card. I am good at containing small bits of information.
        I am convenient because I require little markup to use effectively.</p>
      </div>
      <div class="card-action">
        
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