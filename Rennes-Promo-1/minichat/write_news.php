<?php 
        if ($_POST['mdp'] == 'lol') {
            ?>
            <?php include('header.php'); ?>
            <form action="post_news.php" method="post">
                <!-- titre de la news -->
                <label for="title">Titre</label>
                <input type="text" name="title" id="title">
                <!-- message -->
                <label for="content">Message</label>
                <textarea type="text" name="content" id="content" rows="10" cols="30"></textarea>
                <!-- date -->
                <input type="hidden" name="date_creation" id="date_creation" value="<?php echo date(" Y-m-d H:i:s "); ?>">
                <!-- envoyer -->
                <input type="submit">
            </form>
            <style>
                body {
                    background-color: #000;
                }
                
                form {
                    height: 100vh;
                }
            </style>
    <?php    
        } else {
            echo ('<p>Désolé ce n\'est pas le bon mot de passe ton chemin muhahahaha !</p>');
        }
    ?>