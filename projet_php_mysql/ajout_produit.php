<?php
    include 'head.php';
    include 'fonction.php';
    include 'nav_bar.php';
    include 'footer.php';

?>

<?php
    $bdd = appelBdd();
    ?>

<div class="container">
    <div class="row">
        <div class="col-12">
            <form action="ajout_produit-enregistrer.php" method="POST">
                <div>
                    <label for="name">Nom :</label>
                    <input type="text" id="name" name="nom_produit">
                </div>
                <div>
                    <label for="desc">description :</label>
                    <input type="text" id="desc" name="desc_produit">
                </div>
                <div>
                    <label for="prix">Téléphone :</label>
                    <input type="num" id="prix" name="prix_produit">
                </div>
                <div>
                    <label for="img">image :</label>
                    <input type="text" id="img" name="img_produit">
                </div>
                <div>
                    <input type="submit" value="créer">
                </div>
            </form>
        </div>
    </div>
</div>