<?php include('includes/header.php'); ?>

<a href="deathnote.php" class="button">ALLER AU DEATHNOTE</a>

<div class="last-names">
    <h2>Les 6 derniers noms inscrits</h2>

    <?php
            // Récupération des 6 derniers messages
            $reponse = $bdd->query('SELECT nom, prenom, message, dateofdeath FROM deathnote ORDER BY ID DESC LIMIT 0, 6');

            // /!\IMPORTANT/!\ Affichage de chaque message (données protégées par htmlspecialchars) /!\IMPORTANT/!\
            while ($donnees = $reponse->fetch())
                {
                    echo '<p class="death">
                    <strong>Nom :</strong> <span class="name">' . 
                    htmlspecialchars($donnees['nom']) . 
                    ' </span>' . 
                    '<strong>Prénom :</strong><span class="name">' .
                    htmlspecialchars($donnees['prenom']) .
                    ' </span>' .
                    '<strong>Cause :</strong> ' . 
                    htmlspecialchars($donnees['message']) . 
                    ' le ' . 
                    htmlspecialchars($donnees['dateofdeath']) . 
                    '</p>';
                }

            $reponse->closeCursor();

    ?>
</div>


<?php include('includes/footer.php'); ?>