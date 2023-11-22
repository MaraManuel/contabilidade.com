<?php
// Sessão
session_start();


//conexao
require_once 'db_connect.php';

if(isset($_POST['btn-editarAdmin'])):
    $nome = mysqli_escape_string($connect, $_POST['nome']);
    $sobrenome = mysqli_escape_string($connect, $_POST['sobrenome']);
    $email = mysqli_escape_string($connect, $_POST['email']);
    $senha = mysqli_escape_string($connect, $_POST['senha']);
    $senhaSegura=password_hash($senha, PASSWORD_DEFAULT);
    $id = mysqli_escape_string($connect, $_GET['id']);



    if(empty($senha)):

        $sql = "update admin set nome='$nome', sobrenome='$sobrenome', email ='$email' where id= '$id'";
    else:
        $sql = "update admin set nome='$nome', sobrenome='$sobrenome', email ='$email', senha='$senhaSegura' where id= '$id'";
    endif;
    

    if(mysqli_query($connect,$sql)):
        $_SESSION['mensagem'] = "Actualizado com sucesso!";
        header('Location:../dash-uma-conta.php?id='.$id);
    else:
        $_SESSION['mensagem'] = "Erro ao actualizar";
        header('Location:../dash-uma-conta.php?id='.$id);
    endif;

endif;