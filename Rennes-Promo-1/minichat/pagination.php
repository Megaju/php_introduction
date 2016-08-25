<?php

$perPage = 5;

$req = $bdd->query('SELECT COUNT(*) AS total FROM deathnote');
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

<?php

echo '<p class="black">$total = ' . $total . '</p>';
echo '<p class="black">$nbPage = ' . $nbPage . '</p>';
echo '<p class="black">$current = ' . $current . '</p>';
echo '<p class="black">$p = ' . $_GET['p'] . '</p>';
echo '<p class="black">------------------------------</p>';
echo '<p class="black">$firstOfPage = ' . $firstOfPage . '</p>';
echo '<p class="black">$perPage = ' . $perPage . '</p>';

?>

<style>.black { background-color: black; color: white;}</style>