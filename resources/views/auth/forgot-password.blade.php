@extends('layouts.app')
@section('content')
<link rel="stylesheet" href="css/login.css">

<div class="container" id="container">

    
    {{--Form ingresar--}}
	<div class="form-container full-container ">
		<form action="{{ route('password.email') }}" method="post">
            @csrf
			<h3>Ingresa tu correo</h3>
			<div class="row"></div><div class="row"></div><div class="row"></div><div class="row"></div><div class="row"></div><div class="row"></div>
            <input type="email" name="email" id="email">
			<div class="row"></div><div class="row"></div><div class="row"></div>
            <button type="submit">Enviar reset link</button>
            </form>
		<ul>
			@foreach ($errors as $error)
				<li> {{$error}} </li>
			@endforeach
		</ul>
	</div>
</div>

@endsection