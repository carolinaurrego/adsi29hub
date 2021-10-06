@extends('Layout.plantillanosotros')
@section('title','eco')
@section('estilo')
 <link href="{{ asset('css/registro.css') }}" rel="stylesheet">

@endsection
@section ('contenido')

<body background="imagenes/25.jpg">
<div class="login-page">

<div class="form">
<div id="RegisterForm" class="register-form">

<form action="{{route('registrar.store')}}" method="POST">
    @csrf
 <h1>Registrate</h1>
<input id="nombre" type="text" name="Nom" placeholder="Nombre">
<input id="apellido" type="text" name="Ape" placeholder="Apellido">
<input id="email" type="email" name="email" placeholder="Email">
<input id="contrasena" type="password" name="pass" placeholder="Crear contrasena">
<!--  <button onclick="CrearUsuario();">Registrarme</button>-->
<input type="submit" name="registro" value="Registrarme">
</form>
</div>
</div>
</div>
<?php

?>
</body>
<div class="frase">
<center><h1>“Un cliente satisfecho es un trabajo bien hecho!”</h1></center>
</div>
<br>
@endsection
