<?php
$servername = "localhost";
$username = "root";
$password = "";
$db_name = "contabilidade";


$connect = mysqli_connect($servername,$username,$password,$db_name);
mysqli_set_charset($connect, "utf8");

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: PUT, GET, POST");
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
date_default_timezone_set('Africa/Luanda'); 

$pastaRaiz = "C:/wamp64/www/contabilidade.com/";
   
if(mysqli_connect_error()):

    echo "Falha na conexão: ".mysqli_connect_error();
endif;
