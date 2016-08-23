<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Page protégée par MDP avec PHP</title>
</head>
<body>
    <p>Trouve le mot de passe pour rentrer dans les mines de la Moria.</p>
    <i>Comme ça on verra si t'es du genre à voir seulement les films où lire les livres, muhahahaha !!!!!</i>
    <form action="moria.php" method="POST">
        <input type="password" name="mdp">
        <input type="submit" value="Valider">
    </form>
    
    <style>
        * {
            margin: 0;
            padding: 0;
        }
        
        body {
            padding: 100px 0;
            text-align: center;
            background-color: #000;
            background-image: url(bg-gate.jpg);
            background-size: cover;
            background-position: center center;
            background-repeat: no-repeat;
            color: #fff;
        }
        
        h1, p, i, form, input {
            color: #fff;
            margin: 10px 0;
            padding: 10px;
            background-color: rgba(0, 0, 0, 0.8);
        }
    </style>
    
</body>
</html>