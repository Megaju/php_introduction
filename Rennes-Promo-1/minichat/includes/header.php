<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>DEATH NOTE</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=PT+Mono" rel="stylesheet">
    <link rel="stylesheet" href="fonts/stylesheet.css">
</head>

<body>
    
    <!-- connection à la bdd -->
    <?php include('connect_bdd.php'); ?>
    
<header>
    <h1><a href="index.php">Death note</a></h1>
    <p id="slogan">Ryuk se modernise un peu et a décidé de mettre en ligne un death note virtuel.. il le partage avec nous, pauvres mortels que nous sommes... bonne écriture à tous !</p>
    <!-- <p id="slogan">Ryuk s'ennuyait un peu... il décida aler d'apprendre à programmer et nous a concocter ce superbe death note en ligne ! Bonne écriture et réfléchisait bien aux conséquences de vos actes...</p> -->
        <nav>
            <ul>
                <li><a href="index.php">couverture</a></li>
                <li><a href="deathnote.php">écrire_un_nom</a></li>
                <li><a href="news.php">actualités</a></li>
                <li><a href="news.php">top_des_éxécutions</a></li>
                <li><a href="apple.php">pommes</a></li>
            </ul>
        </nav>
</header>