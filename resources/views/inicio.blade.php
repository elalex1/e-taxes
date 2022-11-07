@extends('layouts.app')
@section('title','inicio')
@section('content')
<div class="row">
    <div class="col s12 m6">
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

  <form action=" {{route('Logout')}}" method="post">
  @csrf
  <a href="#" onclick="this.closest('form').submit()"> Cerrar Sesion </a>
  </form>
@endsection