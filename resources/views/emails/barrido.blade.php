<x-mail::message>
# Verifica tu correo
 
Hola! {{$name->email}} Necesitamos saber si sigues trabajando con nostros, para ello ocupamos que des click en el siguiente boton
tienes hasta el dia 15 del mes para poder confirmar. sino tu cuenta se eliminara :c


@component('mail::button',['url' => route('Verificado',$name->email) ])
Verificar Correo</a>   
@endcomponent




 
Gracias,<br>
{{ config('app.name') }}
</x-mail::message>