<?php
require_once'db_connect.php';
    $nomeverfal = $_POST["nomeverfal"];
    $textoverfal = $_POST["textoverfal"];
    $rubricaverfal = $_POST["rubricaverfal"];
  
    include_once 'db_connect.php';    

    $sql = "INSERT INTO questao(nome,texto) VALUES('$nomeverfal','$textoverfal');";
mysqli_query($connect, $sql);
$id = mysqli_insert_id($connect);
$sql2 = "INSERT INTO questao_vf(questao_id,alternativa_correta) VALUES('$id','$rubricaverfal')";

    if(mysqli_query($connect, $sql2)){
     header('Location: gerenciador.php');
    }else{
      header('Location: gerenciador.php');
    }
    mysqli_close($connect);

?>