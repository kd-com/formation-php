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
$stmt = $bdd->query("SELECT * FROM `user` WHERE `id` LIKE '$id'");
?>

<div class="container">
    <div class="row">
        <?php
        while($row = $stmt->fetch()) {
            ?>
            <div class="card" style="width: 18rem;">
                        
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $row['nom_user'];?></h5>
                            <p class="card-text"><?php echo $row['mail_user'];?></p>
                            <p class="card-text"><?php echo $row['tel_user'];?></p>

                            
                        </div>
                    </div>
            <?php
        }
        ?>
    </div>
</div>