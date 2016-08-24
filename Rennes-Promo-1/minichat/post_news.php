<?php

    

    include('connect_bdd.php');
            

// Insertion du message à l'aide d'une requête préparée
$req = $bdd->prepare('INSERT INTO news (title, content, date_creation) VALUES(?, ?, ?)');
$req->execute(array($_POST['title'], $_POST['content'], $_POST['date_creation']));

// Redirection du visiteur vers la page du minichat
header('Location: news.php');

?>