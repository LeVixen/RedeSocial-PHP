<?php
require_once("connection.php");

   if (isset($_POST['delet'])){
         $query = "DELETE FROM amigos WHERE id='".$_POST['delet']."'";
         $enviar = mysqli_query($conection, $query);
         header("location: ../home.php");
   }else{
      echo "<h2>Erro ao deletar</h2>";
   }
?>