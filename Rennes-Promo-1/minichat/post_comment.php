<?php

        include('connect_bdd.php');
            

// Insertion du message à l'aide d'une requête préparée
$req = $bdd->prepare('INSERT INTO comments (id_news, author, comment, date_comment) VALUES(?, ?, ?, ?)');
$req->execute(array($_POST['id_news'], $_POST['author'], $_POST['comment'], $_POST['date_comment']));

// Redirection du visiteur vers la page du minichat
header('Location: comments.php?news_number=' . $_POST['id_news']);

?>