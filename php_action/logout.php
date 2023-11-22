<?php
//Encerrando a sessao:
//Encerrando a sessao:
echo var_dump($_GET);
if(!empty($_GET['email']))
$email = $_GET['email'];
else
$email='';
session_start(); 
session_unset();
session_destroy();  
if($email == '')
header('Location:../login.php');
else
header('Location:../login.php?email='.$email); 