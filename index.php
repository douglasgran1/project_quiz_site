<?php
require_once('db_connect.php');
?>

<!doctype html>
<html>

<head>

<link rel="stylesheet" href="css/style.css">
<script src="js/jquery-3.5.1.min.js"></script>
<script src="js/jquery.validate.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<title>Techquiz</title>

</head>

<body>

<img src="imagens/capatechquiz.jpg" alt="Imagem com problema" class="imgtech">

<form action="validar.php" method="POST" autocomplete="off">
<input type="text" name="usuario" class="login login-user" placeholder="  Usuario" required>
 <input type="password" name="senha" class="login login-senha" placeholder=" Senha" required>
  <input type="submit" name="entrar" value="Entrar" class="botao botao-submit">
  <input type="button" value="Registrar-se" class="botao botao-signin" onclick="location.href='register.html'">

</form>

  </body>

</html>