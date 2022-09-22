<?php
    include 'head.php';
    
    include 'nav_bar.php';
    include 'footer.php';

?>

<?php



$id = $_GET['id'];
?>
<?php
$stmt = $bdd->query("SELECT * FROM `produit` WHERE `id` LIKE '$id'");
?>
<div class="container">
    <div class="row">
        <?php
        while($row = $stmt->fetch()) {
                    ?>
                    <div class="col-6">
                        <img class="img-fluid" src="img/<?= $row['img_produit'];?>">
                    </div>
                    <div class="col-6">
                        <h1><?= $row['nom_produit'];?></h1>
                        <p><?= $row['desc_produit'];?></p>
                        <p><?= $row['prix_produit'];?> €</p>
                        <a href="#" class="btn btn-secondary">ajouter au panier</a>
                        <a href="supp_produit.php?id=<?= $row['id']?>">Supprimer le produit</a>
                    </div>
                    <?php
                }
            ?>
                
    </div>
</div>