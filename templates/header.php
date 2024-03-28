<?php
    include_once('./helpers/url.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Blog Codar</title>

        <!-- Fontes -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

        <!-- Estilos -->
        <link rel="stylesheet" href="<?= $BASE_URL ?>css/styles.css">
    </head>
    <body>
        <header>
            <a href="<?= $BASE_URL ?>" id="logo">
                <img src="<?= $BASE_URL ?>img/logo.svg" alt="Blog Codar">
            </a>
            <nav>
                <ul id="navbar">
                    <li><a href="<?= $BASE_URL ?>">Home</a></li>
                    <li><a href="#">Categorias</a></li>
                    <li><a href="#">Sobre</a></li>
                    <li><a href="#">Contato</a></li>
                </ul>
            </nav>
        </header>