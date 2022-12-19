
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
<link rel="stylesheet" href="css/login.css">




<div class="container" id="container">

    {{--Form crear cuenta--}}
	<div class="form-container sign-up-container">
		<form action="{{Route('Register')}}" method="post">
			<h3>Crear Cuenta</h3>
			@csrf
			<input type="text" placeholder="Nombre" name="name"/>
			<input type="email" placeholder="Correo" name="email"/>
            <input type="number" name="phone" id="telefono" placeholder="Telefono">
			<input type="password" placeholder="Contraseña" name="password" />

			<button type="submit">Registrarse</button>
		</form>
	</div>

    {{--Form ingresar--}}
	<div class="form-container sign-in-container">
		<form action="{{route('Login')}}" method="post">
			@csrf
			<h3>Ingresar</h3>
			<input type="text" placeholder="Email" name="email" />
			<input type="password" placeholder="Password" name="password"/>
			<p>
				<label>
				  <input type="checkbox" name="remember"/>
				  <span>Recuerdame</span>
				</label>
			  </p>
			
			<button type="submit">Ingresar</button>
			<a href="{{route('password.request')}}">Olvidaste tu contraseña?</a>
		</form>
		<ul>
			@foreach ($errors as $error)
				<li> {{$error}} </li>
			@endforeach
		</ul>
	</div>
{{--=========================================================================================--}}


	<div class="overlay-container">
		<div class="overlay">
            {{--Texto panel registrarse--}}
			<div class="overlay-panel overlay-left">
				<h3>Ya tienes cuenta?</h3>
				<p>Ingresa para que no te caiga el sat!</p>
				<button class="ghost" id="signIn">Ingresar</button>
			</div>
            {{--Texto panel Login--}}
			<div class="overlay-panel overlay-right">
				<h3>Hola, deudor!</h3>
				<p>No tienes cuenta?</p>
                <div class="row"></div>
				<button class="ghost" id="signUp">Registrate</button>
			</div>

		</div>
	</div>

</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

<script>
const signUpButton = document.getElementById('signUp');
const signInButton = document.getElementById('signIn');
const container = document.getElementById('container');

signUpButton.addEventListener('click', () => {
	container.classList.add("right-panel-active");
});

signInButton.addEventListener('click', () => {
	container.classList.remove("right-panel-active");
});
</script>
                
    
            

