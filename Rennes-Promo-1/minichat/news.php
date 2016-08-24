<?php include('header.php'); ?>

<!-- Listes des 6 dernières nouvelles -->
<?php
            // Récupération des 6 dernières news
            $reponse = $bdd->query('SELECT id, title, content, DATE_FORMAT(date_creation, \'%d/%m/%Y à %Hh%imin\') AS date_creation FROM news ORDER BY date_creation DESC LIMIT 0, 6');

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
                    '<a href="' . 'comments.php?news_number=' . htmlspecialchars($donnees['id']) .  '">Commentaires</a>' .
                    '</div>';
            }

            $reponse->closeCursor();

            ?>

<?php include('footer.php'); ?>