<?php  

include_once 'includes/mensagem.php';


//conexao
require_once 'php_action/db_connect.php';
 

?>
<!doctype html>
<html lang="pt">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mara Manuel"> 
    <title>CNAP</title>
 
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

      
    <link rel="stylesheet" href="./includes/css/bootstrap.css">
    <link rel="stylesheet" href="./includes/icones/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="./includes/css/product.css">
    <link rel="stylesheet" href="./includes/css/features.css">  
    <link rel="stylesheet" href="./includes/css/sidebars.css">  
    <link rel="stylesheet" href="./includes/css/style.css"> 
    <link href="./includes/css/offcanvas.css" rel="stylesheet">
  </head>
  <body class="bg-light  m-0 p-0">
    
 

<div class="nav-scroller  w-100 bg-body m-lg-1 mb-0 mb-lg-0  shadow-sm">
  <nav class="nav nav-underline text-dark" aria-label="Secondary navigation">
     
    <a class="nav-link 
    <?php 
    if($_SERVER["REQUEST_URI"]=='/dash-forms.php')
    echo ' active '?>" 
    aria-current="page" href="./dash-forms.php"
    > Formulários</a>
    <a class="nav-link<?php 
    if($_SERVER["REQUEST_URI"]=='/dash-produtos.php')
    echo ' active '?>"  
    aria-current="page" href="./dash-produtos.php"
    >
     Produtos
      
    </a> 
    <a class="nav-link
    <?php 
    if($_SERVER["REQUEST_URI"]=='/dash-contas.php')
    echo ' active '?>"  
    aria-current="page" href="./dash-contas.php"
    >Contas</a> 
  </nav>
</div>


<div class="bg-primary-color shadow-light w-100  justify-content-center d-flex  align-content-around py-5 px-5"> 
  
  <img class=" my-5 "  src="./includes/icones/meus-icones/Ativo 4novo.png" height="100">
</div>

   