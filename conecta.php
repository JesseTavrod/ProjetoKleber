<?php 

$host = "localhost";
$user = "root";
$senha = "";
$database = "db_clinica";

$conexao = mysqli_connect($host,$user,$senha,$database);

// if($conexao->connect_error){
//    echo "Desconectado! Erro: " . $conexao->connect_error;
// }else{
//    echo "Conectado!";
// }

?>
