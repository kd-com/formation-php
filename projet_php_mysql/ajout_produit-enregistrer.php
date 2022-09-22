<?php
include 'head.php';
include 'nav_bar.php';

?>

<?php
var_dump($_FILES);

move_uploaded_file($_FILES['img_produit']['tmp_name'], $_SERVER["DOCUMENT_ROOT"]."/projet_php_mysql/img/".$_FILES['img_produit']['name']);




ajoutProduit();

?>
<div class="container">
    <div class="row">
        <div class="col-12 text-center">
            <p>Merci pour votre ajout</p>
            <a href="index.php" class="btn btn-primary">Retour à l'accueil</a>
        </div>
    </div>
</div>

<?php 
    include 'footer.php';
    ?>