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
    $email = clear($_POST['email']);

    date_default_timezone_set('Africa/Luanda');  
    $data_de_entrada =  date('Y-m-d H:i:s');

    $sql = "insert into email_marketing (email, data_de_entrada) values('$email', '$data_de_entrada') ";

    if(mysqli_query($connect,$sql)):
        $_SESSION['mensagem'] = "Subscrito com sucesso!";
        header('Location:../index.php?status=success');
    else:
        $_SESSION['mensagem'] = "Erro ao subscrever";
        header('Location:../index.php?status=error');
    endif;

endif;