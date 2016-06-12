<?php
//se inicializan las variables
$i=0;
$mensaje="";
//si la variable $mensaje y $clase no tiene ningun valor se inicializa como void
if(!$mensaje){
$mensaje="";
$clase="";
}
//Se importa la conexión a la base de datos desde nuestro archivo conexion.php
include('conexion.php');
//Se crea la consulta de la tabla usuarios
$sql = mysqli_query($link, "SELECT * FROM usuarios") or die(mysqli_error());
//Se hace una iteración para saber el numero de usuarios que contiene
while($row = mysqli_fetch_array($sql)){
    $i=$i+1;
}
//Si en nuestra base hay mas de 33 usuarios cambia de valor las variables $clase y $mensaje que se muestran en el archivo registro.php que corresponden a deshabilitar el campo de registro y mostrar un mensaje
if($i >=33){
$clase="disabled";
    $mensaje="Lo sentimos. Estamos llenos, suerte para la proxima";
}

//de lo contario el campo de registro permanece abierto con el valor de las variables
else{
$clase="enabled"; 
    include('validacion2.php');
}

?>