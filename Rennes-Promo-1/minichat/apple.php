<?php include('includes/header.php'); ?>


<p class="count-apple">POMMES ACTUELLEMENT DONNÉES</p>
<p class="count-apple apple">
    <?php
        //on récupère le nombre de pomme dans la bdd
        $a = $bdd->query('SELECT apples FROM appleforryuk LIMIT 0, 1');
            
            while ($donnees = $a->fetch())
            {
                echo $donnees['apples'];
            }
    ?>
</p>

<a href="posts/give_an_apple.php" class="button give-an-apple">DONNER UNE POMME À RYUK !</a>

<style>
    .give-an-apple {
        background-image: url(images/give_an_apple.jpg);
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center center;
    }
    
    .count-apple {
        width: 50%;
        height: 40px;
        text-align: center;
        margin: 40px auto;
        line-height: 40px;
        background-color: #222;
    }
    
    .apple {
        overflow-y: auto;
        margin: -40px auto;
        font-size: 25px;
    }
</style>



<?php include('includes/footer.php'); ?>