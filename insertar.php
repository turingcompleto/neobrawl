<?php
//Se importa la conexión a la base de datos desde nuestro archivo conexion.php
include('conexion.php');

//Se crea el query para insertar a la tabla usuarios en los campos nick e email solamente
$insertar = mysqli_query($link,"INSERT INTO usuarios (nick,email)
VALUES ('$nick', '$email')"); 
//Los valores de las variables nick e email vienen del formulario de registro.php que se reciben por POST en el archivo de validacion2.php 
$idusuario = mysqli_insert_id($link);
?>