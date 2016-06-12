<?php
//Se importa la conexión a la base de datos desde nuestro archivo conexion.php
include('conexion.php');

$i=1;  //se incializa nuestro contador i
//Metemos el valor de nuestra función reservada en php para hacer una consulta a la tabla usuarios.
$sql = mysqli_query($link, "SELECT * FROM usuarios") or die(mysqli_error());
// mostramos los registros con un while y la función mysqli_fetch_array que itera sobreel arreglo que se crea a partir de la consulta
while($row = mysqli_fetch_array($sql)){
    //se muestra el formato que ayudara a construir la tabla en la vista
echo "<tr>";
echo "<td>".$row['id']."</td>";
echo "<td>".$i++."</td>";
echo "<td>".$row['nick']."</td>";   
echo "<td>".$row['email']."</td>";
}
?>
