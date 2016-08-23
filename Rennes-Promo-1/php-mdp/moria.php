<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Mine la Moria</title>
</head>
<body>
    <?php 
        if ($_POST["password"] == $_SESSION["password-of-the-door"]) {
            ?>
            <!-- contenue du site -->
            <h1>Mine de la Moria !</h1>
            <p>Bravo tu es rentrer dans les mines de la Moria !</p>
            <p>Autour de toi il y a... des cadavres de nains morts depuis maintenant un bon gros bail. On peut imaginer
            que cette bande de joyeux mineur ne vas pas récupérer son chèque de cotion parce que c'est franchement le bordel !</p>
            <i>#lolance</i>
            <?php    
        } else {
            echo ('<p>Désolé ce n\'est pas le bon mot de passe. Va lire ou cherche sur internet noob !</p>');
        }
    ?>
</body>
</html>