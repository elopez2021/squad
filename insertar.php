<?php
include ("config.php");
include ("formulario.php");

$nombre = $_POST["nombre"];
$email = $_POST["email"];
$telefono = $_POST["telefono"];
$sitio_web = $_POST["sitio_web"];
$asunto = $_POST["asunto"];
$mensaje = $_POST["mensaje"];

$insertar = "INSERT INTO form_contacto(nombre, email, telefono, sitio_web, asunto, mensaje) VALUES ('$nombre','$email', '$telefono','$sitio_web','$asunto','$mensaje')";

$resultado = mysqli_query($conexion, $insertar);

if($resultado){
    echo "<script>alert('Se ha enviado con exito');</script>";
}
else {
     echo "<script>alert('No se pudo enviar');</script>";
}

?>
