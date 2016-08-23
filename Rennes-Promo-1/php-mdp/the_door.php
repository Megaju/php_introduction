<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Page protégée par MDP avec PHP</title>
</head>
<body>
    <?php $_SESSION["password-of-the-door"] = "mellon" ?>
    
    <p>Trouve le mot de passe pour rentrer dans les mines de la Moria.</p>
    <i>Comme ça on verra si t'es du genre à voir seulement les films où lire les livres, muhahahaha !!!!!</i>
    <form action="moria.php" method="POST">
        <input type="password" name="password">
        <input type="submit" value="Valider">
    </form>
    
    
</body>
</html>