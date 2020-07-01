<?php
include('db_connect.php');
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

$sql = "SELECT login,senha FROM gerenciador WHERE login='$usuario' AND senha='$senha' LIMIT 1";
$resultado=mysqli_query($connect, $sql);

if($resultado->num_rows ==1){
  header('Location: gerenciador.php');
}

 else{
$sql2= "SELECT login,senha FROM equipe WHERE login='$usuario' AND senha='$senha' LIMIT 1";
$resultado=mysqli_query($connect, $sql2);
   if($resultado->num_rows ==1){
    header('Location: gerenciador.php');
   }else{
   header("Location: index.php");
  }
  header("Location: index.php");
 }

?>
