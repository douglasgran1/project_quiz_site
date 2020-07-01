<?php
require_once'db_connect.php';
    $nomeevento = $_POST["nomeevento"];
    $semestreevento = $_POST["semestreevento"];
    include_once 'db_connect.php';    

$sql2 = "INSERT INTO evento(nome,semestre) VALUES('$nomeevento','$semestreevento')";

    if(mysqli_query($connect, $sql2)){
     header('Location: gerenciador.php');
    }else{
      header('Location: gerenciador.php');
    }
    mysqli_close($connect);

?>