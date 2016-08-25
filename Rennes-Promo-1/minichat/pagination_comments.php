<?php

$perPage = 5;

$req = $bdd->query('SELECT COUNT(id_news) WHERE id_news=' . $_GET['news_number'] . ' AS total FROM comments'); //cibler les comments avec le bon "id_news" puis c'est ok.
$result = $req->fetch();
$total = $result['total'];

$nbPage = ceil($total/$perPage); //ceil arrondis au supérieur.

// on vérifie l'existance de 'p' et on vérifie quelle n'est pas vide et que c'est bien
// un chiffre avec ctype_digit.
if (isset($_GET['p']) && !empty($_GET['p']) && ctype_digit($_GET['p']) == 1) {
    //nouvelle condition pour empêcher l'usr de partir trop loin...
    if ($_GET['p'] > $nbPage) {
        $current = $nbPage;
    } else {
        $current = $_GET['p'];
    }
} else {
    $current = 1; //page courante par défaut si pas besoin de pagination.
}

//le 1er noms de la page
$firstOfPage = ($current-1)*$perPage;

?>