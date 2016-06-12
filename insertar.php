<?php

include('conexion.php');


$insertar = mysqli_query($link,"INSERT INTO usuarios (nick,email)
VALUES ('$nick', '$email')");
$idusuario = mysqli_insert_id($link);

?>