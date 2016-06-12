<?php
$i=0;
$mensaje="";
if(!$mensaje){
$mensaje="";
$clase="";
}

include('conexion.php');

$sql = mysqli_query($link, "SELECT * FROM usuarios") or die(mysqli_error());

while($row = mysqli_fetch_array($sql)){
    $i=$i+1;
}

if($i >=33){
$clase="disabled";
    $mensaje="Lo sentimos. Estamos llenos, suerte para la proxima";
}


else{
$clase="enabled"; 
    include('validacion2.php');
}

?>