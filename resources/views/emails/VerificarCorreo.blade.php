<x-mail::message>
# Verifica tu correo

<x-mail::panel>
    Hola para continuar con el proceso de registro solo da click en el siguiente enlace
</x-mail::panel>

<x-mail::button :url="$url">
View Order
</x-mail::button>


Gracias,<br>
{{ config('app.name') }}
</x-mail::message>
