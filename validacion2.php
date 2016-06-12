<?php

$check=0;
$check2=0;
$confir=0;
$clasee="";
$clasen="";

    if(!$_POST){
        $email=0;
        $nick=0;
    } 
    else{
        $email=$_POST["mail"];
        $nick=$_POST["nick"];

        include('conexion.php');
        $sql = mysqli_query($link, "SELECT * FROM usuarios") or die(mysqli_error());

        while($row = mysqli_fetch_array($sql)){
    
            if($row['email'] == $email){
                $check=1;
                $confir=1;
            }
            else{
                if($row['nick'] == $nick){
                    $check2=1;
                    $confir=2;
                }
            }
        }
        
        if($confir==1){
            $mensaje="Este email ya fue registrado";
            $clasee="has-error";
?>
                 <!--     <script languaje="javascript">
                alert("email en uso");
                location.href = "index.php";
                </script>-->
       <?php
        }
        if($confir==2){
            $mensaje="Este nick ya fue registrado";
            $clasen="has-error";
            ?>
                     <!-- <script languaje="javascript">
                alert("nick en uso");
                location.href = "index.php";
                </script>-->
       <?php
        }
        
if($check!=1 && $check2!=1){
    include('insertar.php');
    $mensaje="¡Registro Exitoso!<a href='participantes.php' class='btn btn-link'> | Checa la lista de participantes aquí</a>";
    if($email=="vglr3000@gmail.com" || $nick=="vglr3000" || $nick=="vglr"){
    $mensaje="¡Registro Exitoso!<br>Vallejo es gay y se la come jijiji";
    }
    if($email=="cardo.tw@hotmail.com" || $nick=="diego" || $nick=="Bolblechi"){
    $mensaje="¡Registro Exitoso!<br>Diego se la come jijiji";
    }
    if($email=="ivan.felavel@gmail.com" || $nick=="ivan" || $nick=="Ivan"){
    $mensaje="¡Registro Exitoso!<br>Ivan se la come jijiji ...la del Valle";
    }
    if($email=="nekro.cannibal.69@gmail.com" || $nick=="nekro" || $nick=="chris"){
    $mensaje="¡Registro Exitoso!<br>Chris se la come jijiji";
    }
    if($email=="alex17z@msn.com" || $nick=="Locky" || $nick=="locky"){
    $mensaje="¡Registro Exitoso!<br>El gran campeón Lucio regresa. Baia, baia";
    }
}
    }
?>