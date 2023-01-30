<?php
include("connection.php");

$query = 'SELECT * FROM amigos';
$enviar = mysqli_query($conection, $query);
?>
