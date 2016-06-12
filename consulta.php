<?php
include('conexion.php');

$i=1;
$sql = mysqli_query($link, "SELECT * FROM usuarios") or die(mysqli_error());
// mostramos los registros
while($row = mysqli_fetch_array($sql)){
echo "<tr>";
echo "<td>".$row['id']."</td>";
echo "<td>".$i++."</td>";
echo "<td>".$row['nick']."</td>"; 
echo "<td>".$row['email']."</td>";
}

?>
