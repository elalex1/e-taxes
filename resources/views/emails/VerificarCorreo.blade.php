<x-mail::message>
# Verifica tu correo
 
Hola! {{$name}} Para continuar verifica tu correo dando click en el siguiente link

@component('mail::button',['url' => route('VerificarCorreo',$email) ])
Verificar Correo</a>   
@endcomponent




 
Gracias,<br>
{{ config('app.name') }}
</x-mail::message>