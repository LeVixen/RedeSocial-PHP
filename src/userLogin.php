<?php
session_start();
include("connection.php");

if(empty($_POST['usuario']) || empty($_POST['senha'])) {
   header('Location: ../index.php');
   exit();
}

$usuario = mysqli_real_escape_string($conection, $_POST['usuario']);
$senha = mysqli_real_escape_string($conection, $_POST['senha']);

$query = "SELECT usuario FROM usuarios WHERE usuario = '{$usuario}' AND senha = '{$senha}'";

$result = mysqli_query($conection, $query);

$row = mysqli_num_rows($result);

if($row == 1) {
   $_SESSION['usuario'] = $usuario;
   header('Location: ../home.php');
   exit();
} else {
   $_SESSION['nao_autenticado'] = true;
   header('Location: ../index.php');
   exit();
}
