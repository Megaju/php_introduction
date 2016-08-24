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
            

// Insertion du message à l'aide d'une requête préparée
$req = $bdd->prepare('INSERT INTO deathnote (nom, prenom, message, dateofdeath) VALUES(?, ?, ?, ?)');
$req->execute(array($_POST['nom'], $_POST['prenom'], $_POST['message'], $_POST['dateofdeath']));

// Redirection du visiteur vers la page du minichat
header('Location: news.php');

?>