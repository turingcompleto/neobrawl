<?php
include('conexion.php');

$i=1;
$colorin="danger";
$sql = mysqli_query($link, "SELECT * FROM usuarios") or die(mysqli_error());
// mostramos los registros
while($row = mysqli_fetch_array($sql)){
echo "<tr class='$colorin'>";
echo "<td>".$row['id']."</td>";
    if($row['id']=="1"){
        $colorin="";
        echo "<td>"."#!$666Merol#&%!"."</td>";
    }
    else
echo "<td>".$i++."</td>";
echo "<td>".$row['nick']."</td>"; 
}

?>
