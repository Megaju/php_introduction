<?php 


include('../includes/connect_bdd.php');

// Insertion du message à l'aide d'une requête préparée
$req = $bdd->prepare('UPDATE appleforryuk SET apples=apples+1 WHERE id=1');
$req->execute(array($_POST['apples']));

// Redirection du visiteur vers la page du minichat
header('Location: /php_introduction/Rennes-Promo-1/minichat/apple.php');


?>