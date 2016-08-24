<?php include('header.php'); ?>


<!-- Listes des 6 dernières nouvelles -->
<?php
            // Récupération des 6 dernières news
            $reponse = $bdd->query('SELECT title, content, date_creation FROM news ORDER BY ID DESC LIMIT 0, 6');

            // /!\IMPORTANT/!\ Affichage de chaque message (données protégées par htmlspecialchars) /!\IMPORTANT/!\
            while ($donnees = $reponse->fetch())
            {   
                echo '<div class="new">' .
                    '<h3 class="new-title">' .
                        htmlspecialchars($donnees['title']) .
                    '</h3>' .
                    '<i class="new-date">Le ' .
                        htmlspecialchars($donnees['date_creation']) . 
                    '</i>' .
                    '<p class="new-content">' .
                    htmlspecialchars($donnees['content']) .
                    '</p>' .
                    '<a href="#">Commentaires</a>' .
                    '</div>';
            }

            $reponse->closeCursor();

            ?>


<?php include('footer.php'); ?>


<style>
    .new {
        width: 66.6vw;
        padding: 20px;
        margin: 50px auto;
        background-color: #222;
        color: #eee;
        border: 1px dashed red;
        outline: 6px solid #222;
    }
    
    .new a {
        display: block;
        margin: 20px 0 0 0;
        color: #f00;
    }
    
    .new-title {
        margin: 0 0 10px 0;
    }
    
    .new-date {
        color: #999;
        font-size: 12px;
    }
</style>