<?php
$host='localhost';
$database='u687036696_fcr';
$username='u687036696_fcr'; 
$password='p0rung4';
$link=mysqli_connect ($host, $username, $password, $database);

if(!$link){
    
	die('Error al conectarse a MySql:'.mysql_error()); 
}
?>
