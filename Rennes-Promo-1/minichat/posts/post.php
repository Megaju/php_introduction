<?php

    include('../includes/connect_bdd.php');
            

// Insertion du message à l'aide d'une requête préparée
$req = $bdd->prepare('INSERT INTO deathnote (nom, prenom, message, dateofdeath) VALUES(?, ?, ?, ?)');
$req->execute(array($_POST['nom'], $_POST['prenom'], $_POST['message'], $_POST['dateofdeath']));

// Redirection du visiteur vers la page du minichat
header('Location: /php_introduction/Rennes-Promo-1/minichat/deathnote.php');

?>