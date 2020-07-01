<?php
require_once'db_connect.php';
    $nomeequipe = $_POST["nomeequipe"];
    $eventoequipe = $_POST["eventoequipe"];
    $loginequipe = $_POST["loginequipe"];
    $senhaequipe = $_POST["senhaequipe"];
    $evento_id = 1;
  
    include_once 'db_connect.php';    

$sql = "INSERT INTO equipe(event_id,nome,login,senha) VALUES('$evento_id','$nomeequipe','$loginequipe','$senhaequipe');";

  if(mysqli_query($connect, $sql)){
     header('Location: gerenciador.php');
    }else{
      header('Location: gerenciador.php');
    }
    mysqli_close($connect);

?>