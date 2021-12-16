<?php
session_start();
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Accueil - Krom Esport</title>
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Rubik&display=swap');
        </style>
        <link rel="stylesheet" href="css/reset.css">
        <link rel="stylesheet" href="css/mobile.css">
        <link rel="stylesheet" href="css/ecranlarge.css">
    </head>



    <body>
        <div class="image_accueil">

        </div>

        <header>
            <p><img id="ouverture_menu" src="img/menu.svg" alt="ouverture_menu"></p>
            <h1>
                <a href="index.php">
                    <img src="img/krom_header.png" alt="krom_header" height="53" width="360">
                </a>
            </h1>
            <a href="admin/login.php"><img id="img_compte" src="img/compte.svg" alt="img_compte"></a>

            <nav id="fermé" class="menu">
                <ul>
                    <li id="icone_fermeture"><img id="fermeture_menu" src="img/close.svg" alt="fermeture_menu"></li>
                    <li><a href="index.php">Accueil</a></li>
                    <li><a href="actualites.php">Actualités</a></li>
                    <li><a href="equipe.php">L'équipe</a></li>
                    <li><a href="info.php">A propos</a></li>
                    <li><a href="krom_competition.php">Krom Competition</a></li>
                </ul>
            </nav>
        </header>