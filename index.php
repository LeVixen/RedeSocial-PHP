<?php
session_start();
include("./src/connection.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="./styles/login.css">
   <title>DasheBook | Login</title>
</head>

<body>
   <nav class="navigation">
      <h1>DashBook</h1>
      <a type="button" id="nav-link" href="register.php">Criar conta</a>
   </nav>
   <div class="content">
      <div class="box-login">
         <h2>Entrar</h2>
         <form class="form-login" action="./src/userLogin.php" method="POST">
            <label>Usuário:</label>
            <input name="usuario" type="text" placeholder="Usuário" required>
            
            <label>Senha:</label>
            <input name="senha" type="password" required>
            <a id="link" href="#">Esqueceu a senha?</a>
            <button type="submit">Entrar</button>
         </form>
      </div>
   </div>
</body>

</html>