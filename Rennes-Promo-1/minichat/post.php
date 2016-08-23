<?php

            try
            {
                $bdd = new PDO('mysql:host=localhost;dbname=deathnotebdd;charset=utf8', 'root', '');
            }
            catch(Exception $e)
            {
                    die('Erreur : '.$e->getMessage());
            }
            

// Insertion du message à l'aide d'une requête préparée
$req = $bdd->prepare('INSERT INTO deathnote (nom, message, date) VALUES(?, ?, ?)');
$req->execute(array($_POST['nom'], $_POST['message'], $_POST['date']));

// Redirection du visiteur vers la page du minichat
header('Location: deathnote.php');

?>