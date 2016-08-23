<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Deathnote</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=PT+Mono" rel="stylesheet">
</head>

<body>
    <!-- connection à la bdd -->
            <?php
            try
            {
                $bdd = new PDO('mysql:host=localhost;dbname=minichat;charset=utf8', 'root', 'facesimplon');
            }
            catch(Exception $e)
            {
                    die('Erreur : '.$e->getMessage());
            }
            ?>
   
    <header>
        <h1>Deathnote</h1>
        <i>Bienvenue dans le Deathnote - les gens dont les noms sont écrit ici sont condamnés à mourir...</i>
    </header>

    <div class="flexbox">
        <section>
            <h2>Écris ici le nom, la cause de la mort ainsi que la date.</h2>
            
            <h3>Tuer c'est faire un choix.</h3>

            <!-- Formulaire à remplir -->
            <form action="post.php" method="post">
                <label for="name">Nom</label>
                <input type="text" name="nom" id="nom">
                <label for="message">Cause de la mort</label>
                <textarea name="message" id="message" cols="30" rows="10">Crise cardique.</textarea>
                <label for="date">Date du décès</label>
                <input type="date" name="date" id="date">
                <input type="submit">
            </form>
            
            <div id="deathnote-style">
            <?php
            // Récupération des 5 derniers messages
            $reponse = $bdd->query('SELECT nom, message, date FROM deathnote ORDER BY ID DESC LIMIT 0, 5');

            // /!\IMPORTANT/!\ Affichage de chaque message (données protégées par htmlspecialchars) /!\IMPORTANT/!\
            while ($donnees = $reponse->fetch())
            {
                echo '<p class="death"><strong>Nom :</strong> ' . htmlspecialchars($donnees['nom']) . ' <strong>Cause :</strong> ' . htmlspecialchars($donnees['message']) . ' <strong>Date:</strong> ' . htmlspecialchars($donnees['date']) . '</p>';
            }

            $reponse->closeCursor();

            ?>
            </div>
        </section>

        <aside>
            <!-- image des règles du deathnote avec css -->
        </aside>
    </div>

    <footer>
        (c)DEATHNOTE, 2016. J.Malle ...
    </footer>
</body>

</html>