@extends('layout.plantillanosotros')
@section('estilo')
<link  href="{{ asset('css/estilosgaleria.css')}}" rel="stylesheet">
@endsection
@section('contenido')


<div>
    <h1 id="titulo" aling="center">usuarios eco&muebles</h1>
<table>
    <tr>
        <th>id_usuarios</th>
        <th>nombres</th>
        <th>apellidos</th>
        <th>correo</th>
        <th>contrasena</th>
    </tr>
    @foreach ($usuarios as $usuario)
    <tr>
        <td>{{$usuario->id_usuarios}}</td>
        <td>{{$usuario->nombres}}</td>
        <td>{{$usuario->apellidos}}</td>
        <td>{{$usuario->correo}}</td>
        <td>{{$usuario->contrasena}}</td>
        <td>

            <form action="{{route('crud.destroy',[$usuario->id_usuarios])}}"method="POST">
            <a href="/usuarios/{{$usuario->id_usuarios}}">editar</a>
            @csrf
            @method('DELETE')
            <input type="submit" value="borrar">
            </form>


    </tr>


</table>
</div>
