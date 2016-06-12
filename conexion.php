<?php
//La variable link contiene la información de la conexión a la base de datos
/*
como parametros de la función reservada en php se piden:
el servidor, usuario de la base de datos, contraseña de la base de datos, nombre de la base de datos*/
$link = mysqli_connect("127.0.0.1", "root", "#MUld3r3x", "u687036696_fcr");
 
/*una peueña validación para saber si la base de datos hizo conexión. Esto a traves de nuestra variable $link */
if(!$link){
    //Cierra la conexion y muestra el mensaje de error de los logs de mysql 
	die('Error al conectarse a MySql:'.mysqli_error()); 
}
?>
