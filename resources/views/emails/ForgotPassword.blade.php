<x-mail::message>
# Reestablece tu contraseña

Hola {{$name}} para reestablecer tu contraseña solo da click en el siguiente boton

@component('mail::button',['url' => route('password.reset', $token) ])
Reestablecer Contraseña</a>   
@endcomponent

Si no fuiste tu quien hizo la peticion solo haz caso omiso<br>
{{ config('app.name') }}
</x-mail::message>
