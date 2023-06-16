<style>
      body{
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(45deg, purple, black);
        }
        center{
            background-color: rgba(0, 0, 0, 0.6);
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            padding: 75px;
            border-radius: 15px;
            color: white;
        }
        input{
            padding: 10px;
            border: none;
            outline: none;
            font-size: 13px;
            border-radius: 10px;
        }
        input[type=submit] {
            background-color: white;
            border: none;
            padding: 10px;
            width: 50%;
            border-radius: 10px;
            font-size: 13px;
            
        }
        input[type=submit]:hover {
            background-color: rgb(73, 2, 73);
            cursor: pointer;
        }
</style>
<html>
<body>
    <center>
  <form id="cadastro" action="cadastro.php" method="POST">
    <h1>Criar Conta</h1>
    Nome:  <input type="text" name="nome" required><br><br>
    Login:  <input type="text" name="login" required><br><br>
    Senha: <input type="password" name="senha" required><br><br>
    <input type="submit" id="cadastrar" value="Cadastrar">
  </form>

    </center>
</body>
</html>