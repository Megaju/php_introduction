<?php
    include('connect_bdd.php');
$req = $bdd->prepare('INSERT INTO news (title, content, date_creation) VALUES(?, ?, ?)');
$req->execute(array($_POST['title'], $_POST['content'], $_POST['date_creation']));
header('Location: news.php');
?>