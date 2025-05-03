<?php
if($_GET){
    $controller = strtolower(str_replace("Controller",replace:"",subject:$_GET['controller']));
    $metodo = strtolower($_GET['metodo']);
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FC Negócios Imobiliários</title>

    <!-- Carregando arquivos JavaScript -->
     <script src="../src/lib/js/animacoes.js"></script>

     <script type="text/javascript" src="lib/js/jquery-3.7.1.min.js"></script>
    
     <script type="text/javascript" src="lib/js/animacoes.js"></script>
       
     <script type="text/javascript" src="lib/js/ajax.js"></script>

    <!-- carregando fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- carregando fontes externas -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">

    <!-- carregando CSS -->
    <link rel="stylesheet" href="../src/lib/css/aurora.css">
    <link rel="stylesheet" href="../src/lib/css/site.css">
</head>
<body>
<header class="header bg-branco hg-80 wd-100 pd-t-1">
    <div class="container">
        <div class="box-6 flex justfy-start item-centro">
            <a href="index.php">
                <!-- <h1><img src="../src/lib/img/logo-FC-300-120.png" width="70%" class="pd-t-1 pd-b-1"><span></span> </h1> -->
                 <h1 class="fonte22 fnc-preto-azulado fw-bold playfair-display mg-l-3 pd-t-1">Flávio Coelho<br><div class="limpar"></div>
                 <div class="barra bg-preto-azulado-escuro"></div><span class="fonte12 fw-300">Negócios Imobiliários</span></h1>
            </a>
            <i class="fa-brands fa-facebook-f       fonte22 fnc-bege fnc-azul-celeste-hover mg-r-3 mg-l-10"></i>
            <i class="fa-brands fa-square-instagram fonte22 fnc-bege fnc-azul-celeste-hover mg-r-3"></i>
            <i class="fa-brands fa-youtube          fonte22 fnc-bege fnc-azul-celeste-hover mg-r-3"></i>
        </div>
               
        <!-- criando menu de navegação -->
        <div class="box-6">
            <nav class="wd-100 mg-t-2">
                <ul class="flex justify-end">
                    <li class="mg-l-3"><a href="#inicio" class="fnc-preto-azulado fnc-azul-celeste-hover espaco-letra fonte16 capitalize">inicio</a></li>
                    <li class="mg-l-3"><a href="#comprar" class="fnc-preto-azulado fnc-azul-celeste-hover espaco-letra fonte16 capitalize">comprar</a></li>
                    <li class="mg-l-3"><a href="#alugar" class="fnc-preto-azulado fnc-azul-celeste-hover espaco-letra fonte16 capitalize">alugar</a></li>
                    <li class="mg-l-3"><a href="#depoimentos" class="fnc-preto-azulado fnc-azul-celeste-hover espaco-letra fonte16 capitalize">depoimentos</a></li>
                    <li class="mg-l-3"><a href="#contato" class="fnc-preto-azulado fnc-azul-celeste-hover espaco-letra fonte16 capitalize">contato</a></li>
                </ul>
            </nav>
        </div>
    </div>
</header>
<div class="limpar"></div>
<div class="esconde"></div>