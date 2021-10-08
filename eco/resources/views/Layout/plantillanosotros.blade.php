 <!DOCTYPE HTML>
<html lange="en">
<head>
    <link rel="icon" href="imagenes/pata.png">
    <meta charset="UTF-8">
    <title>ECO&MUEBLES</title>
    @yield('estilo')
</head>
<div class="menu">
        <ul>
            <li><a class="active" href="http://localhost/ejer.proyecto%20php/index.html">Inicio</a></li>
            <li><a href="http://localhost/ejer.proyecto%20php/nosotros.php">Nosotros</a></li>
            <li><a href="http://localhost/ejer.proyecto%20php/servicios.php">Nuestros servicios</a></li>
            <li><a href="http://localhost/ejer.proyecto%20php/galeria.php">Galeria</a></li>
            <li><a href="http://localhost/ejer.proyecto%20php/formulariocontacto.php">Contactenos</a></li>
        </ul>
        <br>
        <br>
        <img  class="logo"src="logos/hogar.png">
             <div class="titulo">
            <strong> ECO & MUEBLES</strong>
            </div>
            <p>
            <hr>
            <p>
      </div>
</head>
      @yield('contenido')
      <footer>
    <div class="marginFooter">
        <h3>2021  ECO & MUEBLES  Comprometidos con el medio ambiente</h3>
    </div>
    <div class="marginFooter">
        <button><a class="active" href="http://localhost/ejer.proyecto%20php/index.html">Inicio</a></button>
        <button>Suscribete</button>
    </div>
</footer>
</html>

