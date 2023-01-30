<?php
session_start();
include('./src/connection.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="./styles/register.css">
   <title>DasheBook | Cadastro</title>
</head>

<body>
   <nav class="navigation">
      <h1>DashBook</h1>
      <a type="button" id="nav-link" href="index.php">Login</a>
   </nav>
   <div class="content">
      <div class="box-register">
         <h2>Cadastro</h2>
         <form class="form-register" action="./src/userRegister.php" method="POST">
            <label>Usuário:</label>
            <input name="usuario" type="text" id="usuario" placeholder="Seu nome de usuário" required>
            <label>E-mail:</label>
            <input type="email" id="email" placeholder="exemplo@gmail.com">
            <label>Senha:</label>
            <input name="senha" type="password" id="senha" placeholder="Digite sua senha" required>
            <button name="registerBtn" type="submit">Registrar</button>
         </form>
      </div>
   </div>
</body>

</html>