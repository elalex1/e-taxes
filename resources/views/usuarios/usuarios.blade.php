@extends('layouts.app')
@section('title','Usuarios')
@section('content')
    <h1>Usuarioss</h1>
<div class="row col s8 offset-s3">
    
        <table id="table_id" class="display">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>correo</th>
                    <th>Telefono</th>
                </tr>
            </thead>
            <tbody>
                
                @foreach ($usuarios as $usuario)
                    <tr>
                        <td> {{$usuario->name}}  </td>
                        <td> {{$usuario->email}} </td>
                        <td> {{$usuario->phone}} </td>
                    </tr>
                @endforeach
                
            </tbody>
        </table>

        <a href=" {{route('ExportUsuarios')}} " class="btn">Exportar Usuarios</a>
    
</div>
@endsection