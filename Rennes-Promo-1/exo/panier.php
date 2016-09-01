<?php include('style.php'); ?>

    <header>
        <h1>CALCUL DU PANIER</h1>
    </header>

    <section>
        <p>Calculer le prix total d’un panier. Celui-ci comportera 3 produits différents. Pour chaque produit, laissez la possibilité d’entrer le `prix` (hors taxe), le `taux de tva` (en pourcentage), et la `quantité`.</p>
        
        <div class="sepa"></div>
        
        <form action="panier.php" method="post">
            <!-- produit 1 -->
            <p>Lot N°1<p>
            <label for="name_produit1">Batmobile > </label>
            <label for="price_produit1">Prix</label>
            <input type="number" name="price_produit1" id="price_produit1">
            <label for="tva_produit1">TVA</label>
            <input type="number" name="tva_produit1" id="tva_produit1">
            <label for="nb_produit1">Nombre</label>
            <input type="number" name="nb_produit1" id="nb_produit1">
            <!-- produit 2 -->
            <p>Lot N°2</p>
            <label for="name_produit2">Slip de Superman > </label>
            <label for="price_produit2">Prix</label>
            <input type="number" name="price_produit2" id="price_produit2">
            <label for="tva_produit2">TVA</label>
            <input type="number" name="tva_produit2" id="tva_produit2">
            <label for="nb_produit2">Nombre</label>
            <input type="number" name="nb_produit2" id="nb_produit2">
            <!-- produit 3 -->
            <p>Lot N°3</p>
            <label for="name_produit3">Touf de cheveux de Lex Luthor > </label>
            <label for="price_produit3">Prix</label>
            <input type="number" name="price_produit3" id="price_produit3">
            <label for="tva_produit3">TVA</label>
            <input type="number" name="tva_produit3" id="tva_produit3">
            <label for="nb_produit3">Nombre</label>
            <input type="number" name="nb_produit3" id="nb_produit3">
            <!-- bouton ok -->
            <input type="submit" class="myButton">
        </form>
        
        <?php
            $p1 = ($_POST['price_produit1'] + $_POST['price_produit1'] * $_POST['tva_produit1'] /100);
        
            $p2 = ($_POST['price_produit2'] + $_POST['price_produit2'] * $_POST['tva_produit2'] /100);
        
            $p3 = ($_POST['price_produit3'] + $_POST['price_produit3'] * $_POST['tva_produit3'] /100);
        
            $total = ($p1 + $p2 + $p3);
        
            echo '<p>Prix total : ' . $total . '€</p>';
        ?>
    </section>