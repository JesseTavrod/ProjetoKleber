<?php 

include("conecta.php");

session_start();

$email = $_POST["email"];
$senha = base64_encode($_POST["senha"]);

//Comando SQL para verificação no banco de dados

$sqlusuario = "SELECT * FROM usuario WHERE email ='$email' and senha = '$senha' ";
$sqlmedico = "SELECT * FROM medico WHERE email ='$email' and senha = '$senha' ";

/* verifica se o é medico o usuario e passa a query*/
if ( mysqli_num_rows(mysqli_query($conexao, $sqlusuario)) > 0) {
    $tipo_usuario ="usuario";
    $cod = "cod_usuario";
    $sql_login = $sqlusuario;
}else{
    $tipo_usuario = "medico";
    $cod = "cod_medico";
    $sql_login = $sqlmedico;
}/* verifica se o é medico o usuario e passa a query*/

$consulta = mysqli_query($conexao, $sql_login); //Puxa as informações no banco de dados

$linha = mysqli_num_rows($consulta); //quantas linhas

$dados_usuario = mysqli_fetch_assoc($consulta); //cria um array com as informações

    if(isset($dados_usuario))
     {
        $_SESSION['tipo_usuario'] = $tipo_usuario; // verificar se é medico ou usuario
        $_SESSION['logado'] = 'true'; 
        $_SESSION['senha'] = $senha;
        $_SESSION['usuario'] = $dados_usuario['nome_completo']; // pega nome do usuario logado
        $_SESSION['id'] = $dados_usuario[$cod]; //sera utilizado para atualizar os dados
        header('location:index.php');
    }
    else{
        unset ($_SESSION['login']);
        unset ($_SESSION['senha']);
        echo "teste";
        header('location:login.php?inf=false');
    }

?>
