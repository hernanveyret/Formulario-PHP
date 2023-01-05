<?php
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$edad = $_POST['edad'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];
$nacionalidad = $_POST['nacionalidad'];
$mensaje = $_POST['mensaje'];
$destino = "hernanveyret@hotmail.com";
$contenido = "Nombre: ".$nombre . "Apellido: " . $apellido . "Edad: " . $edad . "Correo: " . $correo . "Telefono: " . $telefono . "Nacionalidad: " . $nacionalidad . "Mensaje: " . $mensaje ;
mail($destino, "Contacto", $$contenido);
header("lacation:gracias.html");

?>