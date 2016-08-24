<?php include('header.php'); ?>
<a href="deathnote.php" class="button">ALLER AU DEATHNOTE</a>


<style>
    h2 {
        text-align: center;
    }
    
    a.button {
        display: block;
        width: 30%;
        height: 120px;
        margin: 50px auto;
        text-align: center;
        line-height: 120px;
        color: red;
        font-size: 24px;
        font-weight: 500;
        text-decoration: none;
        background-color: #444;
        outline: 6px solid #444;
        border: 1px dashed red;
        transition: .6s;
    }
    
    a.button:hover {
        border-color: aqua;
        background-color: #ddd;
        outline-color: #ddd;
        color: aqua;
        transition: .6s;
    }
    
    .last-names {
        padding: 6px 6px 6px 6px;
        width: 666px;
        margin: 66px auto;
        color: #222;
        background-color: #eee;
        background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAoAAAAKCAYAAACNMs+9AAAAJUlEQVQYV2NkIADWbz3zP9DbhJFxVCG2EIAHD4hBKIhA8kSHIwAFXCc6ZL2aaQAAAABJRU5ErkJggg==);
    }
</style>

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


<?php include('footer.php'); ?>