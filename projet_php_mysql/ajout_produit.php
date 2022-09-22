<?php
    include 'head.php';
    include 'nav_bar.php';


?>



<div class="container">
    <div class="row">
        <div class="col-12">
            <form action="ajout_produit-enregistrer.php" method="POST" enctype='multipart/form-data'>
                <div>
                    <label for="name">Nom :</label>
                    <input type="text" id="name" name="nom_produit">
                </div>
                <div>
                    <label for="desc">description :</label>
                    <input type="text" id="desc" name="desc_produit">
                </div>
                <div>
                    <label for="prix">prix :</label>
                    <input type="num" id="prix" name="prix_produit">
                </div>
                <div>
                    <label for="img">image :</label>
                    <input type="file" id="img" name="img_produit">
                </div>
                <div>
                    <input type="submit" value="créer">
                </div>
            </form>
        </div>
    </div>
</div>

<?php 
    include 'footer.php';
    ?>