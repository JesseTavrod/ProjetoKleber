<?php 
include("conecta.php");

session_start();

header('Content-Type: text/html; charset=utf-8');

$cod_id = $_SESSION['id'];

$nome_completo = utf8_decode($_POST['nome_completo']);
$cidade = utf8_decode($_POST['cidade']);
$uf = utf8_decode($_POST['uf']);
$email = utf8_decode($_POST['email']);
$sexo = utf8_decode($_POST['sexo']);
$data_nascimento = utf8_decode($_POST['data_nascimento']);


if( $_SESSION['tipo_usuario'] == 'medico' ){

    $especialidade = utf8_decode($_POST['especialidade']);
    $descricao = addslashes(utf8_decode($_POST['descricao']));  //addslashes "ignora" as aspas
    $identificacao_medico = $_POST['identificacao_medico']; 

	if(isset($_FILES['imagem'])){
        $arquivo_temporario = $_FILES["imagem"]['tmp_name']; 
        $arquivo = basename($_FILES['imagem']['name']);  //pega o nome do elemento, a função serve pra so pegar o nome do arquivo mesmo
        $diretorio = "medicos"; //Pasta que sera enviado
        move_uploaded_file($arquivo_temporario, $diretorio."/".$arquivo); //move do arquivo temporario para a pasta
	}else{
		$arquivo = $_POST['img_existente'];
	}
             
	$sql = "UPDATE medico SET  
	identificacao_medico = $identificacao_medico , 
	nome_completo = '$nome_completo',
	cidade= '$cidade',
	uf= '$uf' , 
	email = '$email' , 
	data_nascimento ='$data_nascimento', 
	sexo = '$sexo',
	especialidade = '$especialidade',
	descricao = '$descricao', 
	img_url = '$arquivo'
	WHERE cod_medico = $cod_id ";

	if(mysqli_query($conexao, $sql) == true){
		header('location: alterar_dados.php?info=true');
	}else{
		header('location: alterar_dados.php?info=erro');
	}


}else{
	$sql = "UPDATE usuario SET `nome_completo`= '{$nome_completo}' ,`cidade`= '{$cidade}' ,`uf`= '{$uf}' , email = '{$email}',`data_nascimento`= '{$data_nascimento}' ,`sexo`= '{$sexo}' WHERE cod_usuario = {$cod_id}";
	
	if(mysqli_query($conexao, $sql) == true){
		header('location: alterar_dados.php?info=true');
	}else{
		header('location: alterar_dados.php?info=erro');
	}
} 

?>