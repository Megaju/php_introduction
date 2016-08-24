<?php include('header.php'); ?>


<!-- nouvelles et ses commentaires -->
<?php
            // Récupération de la news souhaité
            $reponse = $bdd->query('SELECT id FROM news ORDER BY ID DESC LIMIT 0, 1');
            $reponse = $bdd->query('SELECT id, id_news, author, comment, date_comment FROM comments ORDER BY ID DESC LIMIT 0, 1');

            // /!\IMPORTANT/!\ Affichage de chaque message (données protégées par htmlspecialchars) /!\IMPORTANT/!\
            while ($donnees = $reponse->fetch())
            {   
                echo '<div class="new">' .
                    '<h3 class="new-title">' .
                    '#' . htmlspecialchars($donnees['id']) . ' ' .
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