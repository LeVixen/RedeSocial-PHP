<?php
include('./src/connection.php');
include('./src/loginVerify.php');

$usuario = $_SESSION['usuario'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="styles/home.css">
   <link rel="stylesheet" href="styles/modal.css">
   <script src="js/modal.js" defer></script>
   <title>Rede Social | Home</title>
</head>

<body>
   <div class="container">
      <div class="content-box-left">
         <div class="content-box-logo">
            <div class="box-logo">
               <img src="img/avatar.webp" alt="avatar">
            </div>
            <div class="box-logout">
               <h2 id="username">Olá <?php echo $usuario; ?></h2>
            </div>
            <a href="src/logout.php">Sair
               <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" width="20" height="20" x="0" y="0" viewBox="0 0 32 32" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                  <g>
                     <g id="ab">
                        <g>
                           <path class="" d="M25,24c-.553,0-1,.447-1,1v2c0,.552-.448,1-1,1H9c-.552,0-1-.448-1-1V5c0-.552,.448-1,1-1h14c.552,0,1,.448,1,1v2c.021,1.318,1.98,1.311,2,0v-2c0-1.654-1.346-3-3-3H9c-1.654,0-3,1.346-3,3V27c0,1.654,1.346,3,3,3h14c1.654,0,3-1.346,3-3v-2c0-.553-.447-1-1-1Z" fill="#ffffff" data-original="#000000"></path>
                           <path class="" d="M29.5,16.025c0-.289-.126-.544-.321-.726l-4.969-5.004c-.928-.922-2.337,.476-1.42,1.41l3.298,3.32h-9.588c-.553,0-1,.447-1,1s.447,1,1,1h9.579l-3.287,3.294c-.39,.391-.39,1.023,.002,1.414,.391,.39,1.024,.39,1.414-.002l4.968-4.978c.197-.183,.324-.438,.324-.728Z" fill="#ffffff" data-original="#000000"></path>
                        </g>
                     </g>
                  </g>
               </svg>
            </a>
         </div>
         <div class="content-container">
            <div class="content-box-itens">
               <div class="content-bar"></div>
               <div class="container-user">
                  <div class="container-friend">
                     <?php include('src/userList.php'); ?>
                     <?php while ($dado = $enviar->fetch_array()) { ?>
                        <div class="box-envolve">
                           <div class="section-form">
                              <form id="formDelet" action="./src/userDelet.php" method="POST">
                                 <button id="btnDelet" value="<?php echo $dado['id']; ?>" name="delet" type="submit">
                                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" width="28" height="28" x="0" y="0" viewBox="0 0 24 24" style="enable-background:new 0 0 512 512" xml:space="preserve" class="hovered-paths">
                                       <g>
                                          <path d="m21.25 0h-18.5c-1.517 0-2.75 1.233-2.75 2.75v18.5c0 1.517 1.233 2.75 2.75 2.75h18.5c1.517 0 2.75-1.233 2.75-2.75v-18.5c0-1.517-1.233-2.75-2.75-2.75z" fill="#f44336" data-original="#f44336" class=""></path>
                                          <path d="m16.419 15.006c.391.391.391 1.023 0 1.414-.195.195-.451.293-.707.293s-.512-.098-.707-.293l-3.005-3.006-3.005 3.006c-.195.195-.451.293-.707.293s-.512-.098-.707-.293c-.391-.391-.391-1.023 0-1.414l3.005-3.006-3.005-3.006c-.391-.391-.391-1.023 0-1.414s1.023-.391 1.414 0l3.005 3.006 3.005-3.006c.391-.391 1.023-.391 1.414 0s.391 1.023 0 1.414l-3.005 3.006z" fill="#fafafa" data-original="#fafafa" class=""></path>
                                          <path d="m12 0h-9.25c-1.517 0-2.75 1.233-2.75 2.75v18.5c0 1.517 1.233 2.75 2.75 2.75h9.25v-10.586l-3.005 3.006c-.195.195-.451.293-.707.293s-.512-.098-.707-.293c-.391-.391-.391-1.023 0-1.414l3.005-3.006-3.005-3.006c-.391-.391-.391-1.023 0-1.414.195-.195.451-.293.707-.293s.512.098.707.293l3.005 3.006z" fill="#f44336" data-original="#d43a2f" class="hovered-path"></path>
                                          <path d="m8.288 7.287c-.256 0-.512.098-.707.293-.391.391-.391 1.023 0 1.414l3.005 3.006-3.005 3.006c-.391.391-.391 1.023 0 1.414.195.195.451.293.707.293s.512-.098.707-.293l3.005-3.006v-2.828l-3.005-3.006c-.195-.195-.451-.293-.707-.293z" fill="#ffffff" data-original="#dadada" class=""></path>
                                       </g>
                                    </svg>
                                 </button>
                              </form>
                           </div>
                           <div class="box-friend">
                              <div class="box-logo">
                                 <img src="img/avatar.webp" alt="avatar">
                              </div>
                              <div class="user-info">
                                 <h2><?php echo $dado['amigo'] ?></h2>
                                 <div class="separete">
                                    <div class="ponto"></div>
                                    <p>Disponivel!</p>
                                 </div>
                              </div>
                           </div>
                        </div>
                     <?php } ?>
                  </div>
                  <button id="open-modal">Adicionar Amigos</button>
               </div>
            </div>
         </div>
      </div>
      <div class="content-box-right">
         <div class="content-box-nav">
            Alguma coisa
         </div>
         <div class="content-box-feed">
            <div class="boxImg">
            </div>
            <div class="text">
            </div>
         </div>
      </div>
   </div>
   <div id="fade" class="hide"></div>
   <div id="modal" class="hide">
      <div class="modal-header">
         <h2>Adiconar Amigos</h2>
         <button id="close-modal">
         <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" width="28" height="28" x="0" y="0" viewBox="0 0 24 24" style="enable-background:new 0 0 512 512" xml:space="preserve" class="hovered-paths">
                                       <g>
                                          <path d="m21.25 0h-18.5c-1.517 0-2.75 1.233-2.75 2.75v18.5c0 1.517 1.233 2.75 2.75 2.75h18.5c1.517 0 2.75-1.233 2.75-2.75v-18.5c0-1.517-1.233-2.75-2.75-2.75z" fill="#f44336" data-original="#f44336" class=""></path>
                                          <path d="m16.419 15.006c.391.391.391 1.023 0 1.414-.195.195-.451.293-.707.293s-.512-.098-.707-.293l-3.005-3.006-3.005 3.006c-.195.195-.451.293-.707.293s-.512-.098-.707-.293c-.391-.391-.391-1.023 0-1.414l3.005-3.006-3.005-3.006c-.391-.391-.391-1.023 0-1.414s1.023-.391 1.414 0l3.005 3.006 3.005-3.006c.391-.391 1.023-.391 1.414 0s.391 1.023 0 1.414l-3.005 3.006z" fill="#fafafa" data-original="#fafafa" class=""></path>
                                          <path d="m12 0h-9.25c-1.517 0-2.75 1.233-2.75 2.75v18.5c0 1.517 1.233 2.75 2.75 2.75h9.25v-10.586l-3.005 3.006c-.195.195-.451.293-.707.293s-.512-.098-.707-.293c-.391-.391-.391-1.023 0-1.414l3.005-3.006-3.005-3.006c-.391-.391-.391-1.023 0-1.414.195-.195.451-.293.707-.293s.512.098.707.293l3.005 3.006z" fill="#f44336" data-original="#d43a2f" class="hovered-path"></path>
                                          <path d="m8.288 7.287c-.256 0-.512.098-.707.293-.391.391-.391 1.023 0 1.414l3.005 3.006-3.005 3.006c-.391.391-.391 1.023 0 1.414.195.195.451.293.707.293s.512-.098.707-.293l3.005-3.006v-2.828l-3.005-3.006c-.195-.195-.451-.293-.707-.293z" fill="#ffffff" data-original="#dadada" class=""></path>
                                       </g>
                                    </svg>
         </button>
      </div>
      <div class="modal-body">
         <form class="modal-select" action="./src/userAdd.php" method="POST">
            <div class="box-input">
               <label for="amigos">Nome:</label>
               <input name="friend" type="text" id="friend" autofocus>
            </div>
            <button id="btn-add" name="adicionar" type="submit">Adicionar</button>
         </form>
      </div>
   </div>
</body>

</html>