<?php
//Se reciben por metodo POST los datos del formulario de contacto que esta en ubicacion.html
    $nombre=$_POST['nombre'];
    $correo=$_POST['correo'];
    $asunto= "CORREO DEL TORNEO DE SMASH";
    $mensaje=$_POST['mensaje'];
    $MiCorreo='vglr3000@gmail.com'; //se define el correo al que se van a enviar los datos
    $cabeceras_adicionales="MIME-Version 1.0 \r\n"; 
//formato del correo para que se vea mejor
	$headers= "DE:".$nombre."<".$correo.">"."PARA: <".$MiCorreo.">";
//funcion reservada de php para enviar emails
	 mail($para,$asunto,$mensaje, $headers);
//al terminar de ejecutar este script con la función header se regresa automaticamente a la pagina ubicacion.html
	header("Location: ubicacion.html");
?>