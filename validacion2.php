<?php
//Se inicializan las variables
$check=0;
$check2=0;
$confir=0;
$clasee="";
$clasen="";
//Si no hay nada enviado por metodo POST las variables reciben un valor void o de cero
    if(!$_POST){
        $email=0;
        $nick=0;
    } 
//En caso contrario se reciben los datos por metodo POST del formulario de registro.php
    else{
        $email=$_POST["mail"];
        $nick=$_POST["nick"];
//Se importa la conexión a la base de datos desde nuestro archivo conexion.php
        include('conexion.php');
        //Se hace una consulta a la tabla usuarios para poder validar si ya estan registrados o no
        $sql = mysqli_query($link, "SELECT * FROM usuarios") or die(mysqli_error());

        while($row = mysqli_fetch_array($sql)){
    //se crean marcas para verificar si el email coincide con alguno de la base de datos
            if($row['email'] == $email){
                $check=1;
                $confir=1;
            }
            else{
                //se crean marcas para verificar si el nick coincide con alguno de la base de datos
                if($row['nick'] == $nick){
                    $check2=1;
                    $confir=2;
                }
            }
        }
        
        if($confir==1){
            //Con las marcas se definen los valores de las variables mostradas en registro.php
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
            //Con las marcas se definen los valores de las variables mostradas en registro.php
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
    //Con las marcas se valida que no inserte los daatos si ya estan registrados en la base de datos de lo contrario se importa nuestro script insertar.php para insertar al usuario en la base de datos
    include('insertar.php');
    //se define la variable mensaje para enviar una confiramación al usuario
    $mensaje="¡Registro Exitoso!<a href='participantes.php' class='btn btn-link'> | Checa la lista de participantes aquí</a>";
}
    }
?>