<?php
require_once'db_connect.php';
    $nomemult = $_POST["nomemult"];
    $textomult = $_POST["textomult"];
    $Alternativaa = $_POST["Alternativaa"];
    $Alternativab = $_POST["Alternativab"];
    $Alternativac = $_POST["Alternativac"];
    $Alternativad = $_POST["Alternativad"];
    $Alternativae = $_POST["Alternativae"];
    $Alternativadcerta = $_POST["Alternativacerta"];

    include_once 'db_connect.php';    

    $sql = "INSERT INTO questao(nome,texto) VALUES('$nomemult','$textomult');";
    mysqli_query($connect, $sql);
    $id = mysqli_insert_id($connect);
    $sql2= "INSERT INTO questao_multipla(questao_id,alternativa_a, alternativa_b, alternativa_c, alternativa_d,alternativa_e,alternativa_correta) VALUES('$id','$Alternativaa','$Alternativab','$Alternativac','$Alternativad','$Alternativae','$Alternativadcerta');"; 
    //echo $sql;
    if(mysqli_query($connect, $sql2)){
      header('Location: gerenciador.php');
    }else{
      header('Location: gerenciador.php');
    }
    mysqli_close($connect);   

?>