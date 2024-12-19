<?php

    include_once("helpers/url.php");
    include_once("data/posts.php");
    include_once("data/categories.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Codar</title>
    <link rel="stylesheet" href="<?= $BASE_URL ?>/css/style.css">
    <link rel="shortcut icon" href="https://cdn-icons-png.flaticon.com/128/4997/4997543.png" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>
<body>
<header>
    <a href="<?= $BASE_URL ?>" id="logo">
        <img src="https://cdn-icons-png.flaticon.com/128/4997/4997543.png" alt="">
    </a>
    <nav>
        <ul  id="nav-bar">
            <li><a class="nav-link" href="<?= $BASE_URL?>">Home</a></li>
            <li><a class="nav-link" href="#">Categorias</a></li>
            <li><a class="nav-link" href="#">Sobre</a></li>
            <li><a class="nav-link" href="<?= $BASE_URL?>/contacto.php">Contacto</a></li>
        </ul>
    </nav>
</header>