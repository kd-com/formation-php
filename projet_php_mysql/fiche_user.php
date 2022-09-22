<?php
    include 'head.php';

    include 'nav_bar.php';


?>

<?php
    


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
                            <a href="modification_fiche.php?id=<?= $row['id'];?>">Modifier mon compte</a>                            
                        </div>
                    </div>
            <?php
        }
        ?>
    </div>
</div>

<?php 
    include 'footer.php';
    ?>