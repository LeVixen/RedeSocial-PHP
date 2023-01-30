<?php
   include("connection.php");

   $usuario = isset($_POST["usuario"])?$_POST["usuario"]:"";
   $email = isset($_POST["email"])?$_POST["email"]:"";
   $senha= isset($_POST["senha"])?$_POST["senha"]:"";

   $query = "INSERT INTO  user (name, email, passwd) VALUES ('$usuario','$email', md5('$senha'))";

   if (mysqli_query($conection, $query)) {
      header('Location: ../index.php');
      exit();
   }else {
      echo "Error: " . $query . "<br>" . mysqli_error($conection);
   }

?>