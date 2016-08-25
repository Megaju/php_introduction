    <?php include('header.php'); ?>
    
    <?php include('pagination.php'); ?>

    <div class="flexbox">
        <section>
            <h2>Écris ici le nom, la cause de la mort ainsi que la date.</h2>
            
            <h3>Tuer c'est faire un choix.</h3>

            <!-- Formulaire à remplir -->
            <form action="post.php" method="post">
                <label for="name">Prénom</label>
                <input type="text" name="prenom" id="prenom">
                <label for="name">Nom</label>
                <input type="text" name="nom" id="nom">
                <label for="message">Cause de la mort</label>
                <textarea name="message" id="message" cols="30" rows="10">Crise cardiaque.</textarea>
                <label for="dateofdeath">Date du décès</label>
                <input type="datetime-local" name="dateofdeath" id="dateofdeath">
                <input type="submit">
            </form>
            
            <div id="deathnote-style">
            <?php
            // Récupération des 50 derniers messages
            $reponse = $bdd->query('SELECT nom, prenom, message, DATE_FORMAT(dateofdeath, \'%d/%m/%Y à %Hh%imin et %ss\') AS dateofdeath FROM deathnote ORDER BY ID DESC LIMIT ' . $firstOfPage . ',' . $perPage);

            // /!\IMPORTANT/!\ Affichage de chaque message (données protégées par htmlspecialchars) /!\IMPORTANT/!\
            while ($donnees = $reponse->fetch())
            {
                echo '<p class="death"> - ' . '<span class="name">' .
                htmlspecialchars($donnees['prenom']) .
                ' ' .
                htmlspecialchars($donnees['nom']) . '</span>' .
                ' <strong>Cause :</strong> ' . 
                htmlspecialchars($donnees['message']) . 
                ' le ' . 
                htmlspecialchars($donnees['dateofdeath']) . 
                '</p>';
            }

            $reponse->closeCursor();

            ?>
            
            <ul class="pagination">
                <li></li>
                
                <?php
                    for($i=1; $i<=$perPage; $i++){
                        if($i == $current) {
                            echo '<li class="active"><a href="#"></a></li>'
                        }
                ?>
                    <li></li>
                <?php
                    } //end boucle for
                ?>
                
                
                <li></li>
            </ul>
            
            </div>
        </section>

        <aside>
            <!-- image des règles du deathnote avec css -->
        </aside>
    </div>

    <?php include('footer.php'); ?>
</body>

</html>