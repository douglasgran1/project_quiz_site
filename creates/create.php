<?php
require_once'db_connect.php';
    $nomeaberta = $_POST["nomeaberta"];
    $textoaberta = $_POST["textoaberta"];
    $rubricaaberta = $_POST["rubricaaberta"];
  
    include_once 'db_connect.php';    

    $sql = "INSERT INTO questao(nome,texto) VALUES('$nomeaberta','$textoaberta');";
mysqli_query($connect, $sql);
$id = mysqli_insert_id($connect);
$sql2 = "INSERT INTO questao_aberta(questao_id,rubrica) VALUES('$id','$rubricaaberta');";

    if(mysqli_query($connect, $sql2)){
     header('Location: gerenciador.php');
    }else{
      header('Location: gerenciador.php');
    }
  
    mysqli_close($connect);

?>