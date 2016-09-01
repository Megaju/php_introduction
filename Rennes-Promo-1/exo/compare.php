<?php include('style.php'); ?>

    <header>
        <h1>Comparateur de prix</h1>
    </header>

    <section>
        <p>Comparer le prix de 4 produits et afficher le nom du produit le moins cher
        et le nom du produit le plus cher. Donnez la possibilité de rentrer le
        `nom` des produits et leur `prix`.</p>
        
        <div class="sepa"></div>
        
        <form action="compare.php" method="post">
           <fieldset>
            <h3 for="prod1">Produit 1</h3>
            <label for="name1">Nom :</label>
            <input type="text" name="name1" id="name1">
            <label for="prix1">Prix : </label>
            <input type="number" name="prix1" id="prix1">
           </fieldset>
           
           <fieldset>
            <h3 for="prod2">Produit 2</h3>
            <label for="name2">Nom :</label>
            <input type="text" name="name2" id="name2">
            <label for="prix2">Prix : </label>
            <input type="number" name="prix2" id="prix2">
           </fieldset>
           
           <fieldset>
            <h3 for="prod3">Produit 3</h3>
            <label for="name3">Nom :</label>
            <input type="text" name="name3" id="name3">
            <label for="prix3">Prix : </label>
            <input type="number" name="prix3" id="prix3">
           </fieldset>
           
           <fieldset>
            <h3 for="prod4">Produit 4</h3>
            <label for="name4">Nom :</label>
            <input type="text" name="name4" id="name4">
            <label for="prix4">Prix : </label>
            <input type="number" name="prix4" id="prix4">
           </fieldset>
           <input type="submit" class="myButton">
        </form>
        
        
        
        <?php
            $produits = array($_POST['name1']=>$_POST['prix1'], $_POST['name2']=>$_POST['prix2'], $_POST['name3']=>$_POST['prix3'], $_POST['name4']=>$_POST['prix4']);
            asort($produits);
            
            end($produits);
            echo '<p>Produit le plus cher : ' . key($produits) . '</p>';
            reset($produits);
            echo '<p>Produit le moins cher : ' . key($produits) . '</p>';
            
        ?>
        
    </section>