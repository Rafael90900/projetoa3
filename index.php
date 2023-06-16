<?php 
session_start();
?>
<style>
  body{
    font-family: Arial, Helvetica, sans-serif;
    background-image: linear-gradient(45deg, purple, black);
    text-align: center;
    color: white;
  }
  center{
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);
    background-color: rgba(0, 0, 0, 0.6);
    padding: 30px;
    border-radius: 10px;
  }
  a{
    text-decoration: none;
    color: gray;
  }
</style>
<html>
<body>
<center>
    olá,<?php
    if(isset($_SESSION['nome'])==null){
    ?> visitante
    <a href="login.php">Login</a>
    <?php } else {
        echo $_SESSION['nome'];?>
        <a href="cadastrar.php">Cadastrar</a><br><br>
        <a href="logout.php">Sair</a>
         <?php } ?>
</center>
</body>



</html>