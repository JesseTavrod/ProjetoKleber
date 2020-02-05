<?php

include('conecta.php'); 

header('Content-Type: text/html; charset=utf-8');

//cadastro de medico ou cliente

if(isset($_POST['nome_completo'])) {

    $nome_completo = utf8_decode($_POST['nome_completo']);
    $cidade = utf8_decode($_POST['cidade']);
    $uf = utf8_decode($_POST['uf']);
    $email = utf8_decode($_POST['email']);
    $data_nascimento = utf8_decode($_POST['data_nascimento']);
    $senha = utf8_decode($_POST['senha']);
    $sexo = utf8_decode($_POST['sexo']);
    $email_medico =  "SELECT * FROM medico WHERE email = '$email'";
    $email_usuario = "SELECT * FROM usuario WHERE email = '$email'";

    //verifica se as senhas são diferentess
    if ($senha != $_POST['senha_confirmacao']) { 
        header('location: cadastro.php?info=false');
    }
     //Se as senhas forem igual, verifica se é medico ou cliente e salva no banco de dados.
    else{

        $senha = base64_encode($senha);
        if ( mysqli_num_rows(mysqli_query($conexao, $email_medico)) < 1 ) {
              //verifica se o email ja esta cadastrado no medico
            if( mysqli_num_rows(mysqli_query($conexao, $email_usuario)) < 1 ){ //verifica se o email ja esta cadastrado no usuario    
                //cadastro medico
                if(isset($_POST['identificacao_medico'])){
                    $arquivo_temporario = $_FILES["imagem"]['tmp_name']; 
                    $arquivo = basename($_FILES['imagem']['name']);  //pega o nome do elemento, a função serve pra so pegar o nome do arquivo mesmo
                    $diretorio = "medicos"; //Pasta que sera enviado
                    move_uploaded_file($arquivo_temporario, $diretorio."/".$arquivo); //move do arquivo temporario para a pasta
                    $especialidade = utf8_decode($_POST['especialidade']);
                    $descricao = addslashes(utf8_decode($_POST['descricao']));
                    $identificacao_medico = utf8_decode($_POST['identificacao_medico']); 
                    $cadastra_dados = "INSERT INTO medico(identificacao_medico, nome_completo,cidade, uf, email, data_nascimento, senha, especialidade, sexo,descricao,img_url) 
                    VALUES($identificacao_medico, '$nome_completo','$cidade','$uf','$email',
                    '$data_nascimento','$senha','$especialidade','$sexo','$descricao','$arquivo')"; //query que sera enviada para inserir os dados
                    mysqli_query($conexao , $cadastra_dados); 
                    header('location: login.php?info=med');     //ao cadastrar usuario, retornara info = usu method GET
                }
                else{ //cadastro usúario
                    $cadastra_dados = "INSERT INTO usuario(nome_completo,cidade,uf,email,data_nascimento,senha,sexo) VALUES('$nome_completo','$cidade','$uf','$email','$data_nascimento','$senha','$sexo')";
                    mysqli_query($conexao , $cadastra_dados);  
                    header('location: login.php?info=usu');   //ao cadastrar usuario, retornara info = med method GET
                }     
            }else{
               header('location: login.php?info=false');
           }
        }else{
            header('location: login.php?info=false');
        }
    }
}

?>