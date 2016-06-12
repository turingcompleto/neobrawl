<?php
    $nombre=$_POST['nombre'];
    $correo=$_POST['correo'];
    $asunto= "CORREO DEL TORNEO DE SMASH";
    $mensaje=$_POST['mensaje'];
    $MiCorreo='facerero@gmail.com';
    $cabeceras_adicionales="MIME-Version 1.0 \r\n";
	$headers= "DE:".$nombre."<".$correo.">"."PARA: <".$MiCorreo.">";

	 mail($para,$asunto,$mensaje, $headers);

	header("Location: ubicacion.html");
?>