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
    $sobrenome = clear($_POST['sobrenome']); 
    $email = clear($_POST['email']);
    $senha= clear($_POST['senha']);
    $senhaSegura=password_hash($senha, PASSWORD_DEFAULT);

    date_default_timezone_set('Africa/Luanda');  
    $data_de_entrada =  date('Y-m-d H:i:s');

    $sql = "insert into admin (nome, sobrenome,email,senha, data_de_entrada) values('$nome','$sobrenome','$email','$senhaSegura','$data_de_entrada') ";

    if(mysqli_query($connect,$sql)):
        $_SESSION['mensagem'] = "Cadastrado com sucesso!";
        header('Location:../dash-contas.php');
    else:
        $_SESSION['mensagem'] = "Erro ao cadastrar";
        header('Location:../dash-contas.php');
    endif;

endif;