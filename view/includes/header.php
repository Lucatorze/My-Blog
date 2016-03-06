<?php require_once('model/dbconf.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>StrangeAnimals42</title>
    <meta name="viewport" content="width=device-width, minimum-scale=0.25, maximum-scale=1.6, initial-scale=1.0" />
    <link href="http://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="./assets/css/default.css">
    <link rel="stylesheet" type="text/css" href="./assets/css/styles.css">
    <link rel="stylesheet" type="text/css" href="./assets/css/styles-641.css">
    <link rel="stylesheet" type="text/css" href="./assets/css/styles-1025.css">
    <link rel="stylesheet" type="text/css" href="./assets/css/styles-1441.css">
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Inconsolata' rel='stylesheet' type='text/css'>
    <script src="./assets/js/jquery.min.js"></script>
    <script src="./assets/js/script.js"></script>
    <script src="./assets/js/plugIn_perso.js">
    <script src="./assets/js/plugIn_perso.min.js"></script>
    <script src="./assets/js/elevator.js" ></script>
    <script src="./assets/js/registerScript.php"></script>
    <script src="./assets/js/viewArticleScript.js"></script>
    <script src="./assets/js/loginScript.php"></script>
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>

</head>
<body>
<main role="main">
    <header class="header">
        <!--<button class="hamburger">&#9776;</button>
        <button class="cross">&#735;</button> -->

        <input class="menu-btn" type="checkbox" id="menu-btn" />
        <label class="menu-icon" for="menu-btn"><span class="navicon"></span></label>
        <?php
        if(isset($_SESSION['admin'])){
            ?>

            <ul class="menu">
                <li><a href="index.php?pages=articles">Articles</a></li>
                <li><a href="index.php?pages=categories">Catégories</a></li>
                <li><a href="index.php?pages=profile">Profile</a></li>
                <li><a href="index.php?pages=admin">Administration</a></li>
                <li><a href="index.php?pages=logout">Déconnexion</a></li>
            </ul>

            <?php
        }
        elseif(isset($_SESSION['userId'])){
            ?>

            <ul class="menu">
                <li><a href="index.php?pages=articles">Articles</a></li>
                <li><a href="index.php?pages=categories">Catégories</a></li>
                <li><a href="index.php?pages=profile">Profile</a></li>
                <li><a href="index.php?pages=logout">Déconnexion</a></li>
            </ul class="menu">

            <?php
        }
        else {
            ?>

            <ul class="menu">
                <li><a href="index.php?pages=articles">Articles</a></li>
                <li><a href="index.php?pages=categories">Catégories</a></li>
                <li><a href="index.php?pages=register">Inscription</a></li>
                <li><a href="index.php?pages=login">Se connecter</a></li>
            </ul>

            <?php
        }
        ?>

    </header>