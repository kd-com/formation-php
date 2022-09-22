<?php
    include 'head.php';
    include 'fonction.php';
    include 'nav_bar.php';
    include 'footer.php';

?>

<?php
    $bdd = appelBdd();


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
                        <img class="w100" src="img/<?= $row['img_produit'];?>">
                    </div>
                    <div class="col-6">
                        <h1><?= $row['nom_produit'];?></h1>
                        <p><?= $row['desc_produit'];?></p>
                        <p><?= $row['prix_produit'];?> €</p>
                    </div>
                    <?php
                }
            ?>
                
    </div>
</div>