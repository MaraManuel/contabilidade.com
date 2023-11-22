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

if(isset($_POST['btn-cadastrar-user'])):


    $nome = clear($_POST['nome']);
    $sobrenome = clear($_POST['sobrenome']);
    $email = clear($_POST['email']);
    $senha = clear($_POST['senha']);
    $senhaSegura = password_hash( $senha, PASSWORD_DEFAULT);

    if(empty($nome) or empty($sobrenome) or empty($email) or empty($senha)):
        $_SESSION['mensagem'] = "Preencha todos os campos";
        header('Location:../Cadastro.php?nome='.$nome.'&sobrenome='.$sobrenome.'&email='.$email);
    else:
        //verificando se $email já existe 
        //String do comando:
        $sql = "SELECT email FROM usuario WHERE email = '$email'";
        //Fazendo o comando(consulta) e guardando o resultado da execuçao do comando
        $resultado = mysqli_query($connect, $sql);

        //Se for maior q zero entao é pq na nossa consulta encontrou-se o que consultamos
        if(!mysqli_num_rows($resultado) > 0):

            $sql = "insert into usuario (nome, sobrenome,email,senha) values('$nome', '$sobrenome', '$email','$senhaSegura')";
 

            if(mysqli_query($connect,$sql)):
                $_SESSION['mensagem'] = "Cadastrado com sucesso!";
                header('Location:../login.php?email='.$email);
            else:
                $_SESSION['mensagem'] = "Erro ao cadastrar";
                header('Location:../Estante-Cadastro.php');
           endif;

else:
    $_SESSION['mensagem'] = "Email já em uso";
        header('Location:../Cadastro.php?nome='.$nome.'&sobrenome='.$sobrenome);
    endif;

endif;



    

endif;

?>