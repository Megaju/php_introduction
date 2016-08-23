<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Mine la Moria</title>
</head>
<body>
    <?php 
        if ($_POST['mdp'] == 'mellon') {
            ?>
            <style>
        * {
            margin: 0;
            padding: 0;
        }
        
        body {
            padding: 100px 0;
            text-align: center;
            background-color: #000;
            background-image: url(bg-moria.jpg);
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