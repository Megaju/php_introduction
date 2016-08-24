<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>DEATH NOTE</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=PT+Mono" rel="stylesheet">
    <link rel="stylesheet" href="DEATHNOTE_Font/stylesheet.css">
</head>

<body>
    <!-- connection à la bdd -->
            <?php
            try
            {
                $bdd = new PDO('mysql:host=localhost;dbname=minichat;charset=utf8', 'root', 'facesimplon');
                //$bdd = new PDO('mysql:host=localhost;dbname=deathnotebdd;charset=utf8', 'root', '');
            }
            catch(Exception $e)
            {
                    die('Erreur : '.$e->getMessage());
            }
            ?>
<header>
    <h1>Death note</h1>
    <p id="slogan">Ryuk se modernise un peu et a décidé de mettre en ligne un death note virtuel.. il le partage avec nous, pauvres mortels que nous sommes... bonne écriture à tous !</p>
        <nav>
            <ul>
                <li><a href="index.php">accueil</a></li>
                <li><a href="deathnote.php">écrire un nom</a></li>
                <li><a href="news.php">les nouvelles</a></li>
            </ul>
        </nav>
</header>