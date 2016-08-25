<?php
    include('../includes/connect_bdd.php');
$req = $bdd->prepare('INSERT INTO news (title, content, date_creation) VALUES(?, ?, ?)');
$req->execute(array($_POST['title'], $_POST['content'], $_POST['date_creation']));
header('Location: /php_introduction/Rennes-Promo-1/minichat/news.php');
?>