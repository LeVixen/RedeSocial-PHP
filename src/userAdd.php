<?php
   require_once("connection.php");

   if (isset($_POST['adicionar'])){
      if(!empty($_POST['friend'])){
         $friend = $_POST['friend'];

         $query = "INSERT INTO amigos(amigo) VALUES ('$friend')";
         $enviar = mysqli_query($conection, $query);

         if($enviar){
            header("location: ../home.php");
            exit;
         }else{
            header("location: ../home.php");
            exit;
         }
      }else{
         header("location: ../home.php");
      }
   }

?>