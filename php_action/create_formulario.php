<?php
// Sessão
session_start();


//conexao
require_once 'db_connect.php';

//Clear
function clear($input)
{
    global $connect;
    //sqp
    $var = mysqli_escape_string($connect, $input);
    // xss
    $var = htmlspecialchars($var);

    return $var;


}

if(isset($_POST['btn-cadastrar'])): 
    $nome = clear($_POST['nome']);
    $email = clear($_POST['email']);
    $empresa = clear($_POST['empresa']);
    $assunto = clear($_POST['assunto']);
    $mensagem = clear($_POST['mensagem']);

    date_default_timezone_set('Africa/Luanda');  
    $data_de_entrada =  date('Y-m-d H:i:s');

    $sql = "insert into formulario (nome,email,empresa,assunto,mensagem, data_de_entrada) values('$nome','$email','$empresa','$assunto','$mensagem', '$data_de_entrada') ";

    if(mysqli_query($connect,$sql)):
        $_SESSION['mensagem'] = "Subscrito com sucesso!"; 
        header('Location:../contactos.php');
    else:
        $_SESSION['mensagem'] = "Erro ao subscrever"; 
        header('Location:../contactos.php');
    endif;

endif;