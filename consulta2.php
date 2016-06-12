<?php
//Se importa la conexión a la base de datos desde nuestro archivo conexion.php
include('conexion.php');

$i=1; //Se inicializa el contador
$colorin=""; //se inicializa la variable que corresponde a una clase de bootstrap 
//Se crea la consulta
$sql = mysqli_query($link, "SELECT * FROM usuarios") or die(mysqli_error());
// mostramos los registros con el formato de la tabla
while($row = mysqli_fetch_array($sql)){
echo "<tr class='$colorin'>";
echo "<td>".$row['id']."</td>";
echo "<td>".$i++."</td>";
echo "<td>".$row['nick']."</td>"; 
}
?>
