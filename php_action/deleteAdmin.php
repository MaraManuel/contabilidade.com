<?php
// Sessão
session_start();


//conexao
require_once 'db_connect.php';

function clear($input)
{
    global $connect;
    //sqp
    $var = mysqli_escape_string($connect, $input);
    // xss
    $var = htmlspecialchars($var);

    return $var;


}

if(isset($_POST['btn-deletar'])):
    
    $id = clear($_GET['id']);


    $sql = "delete from admin where id ='$id'";

    if(mysqli_query($connect,$sql)):
        $_SESSION['mensagem'] = "Deletado com sucesso!";
        header('Location:../dash-contas.php');
    else:
        $_SESSION['mensagem'] = "Erro ao delectar";
        header('Location:../dash-contas.php');
    endif;

endif;