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
        <div class="col-12">
            <?php
        while($row = $stmt->fetch()) { ?>
            <form action="modification_enregistrer.php" method="POST">
            
                    <input type="text" id="identifiant" name="id" value="<?= $row['id'] ?>" style="display:none;">
               
                <div>
                    <label for="name">Nom :</label>
                    <input type="text" id="name" name="nom_user" value="<?= $row['nom_user'] ?>">
                </div>
                <div>
                    <label for="mail">e-mail&nbsp;:</label>
                    <input type="email" id="mail" name="mail_user" value="<?= $row['mail_user']?>">
                </div>
                <div>
                    <label for="tel">Téléphone :</label>
                    <input type="tel" id="tel" name="tel_user" value="<?= $row['tel_user']?>">
                </div>
                <div>
                    <input type="submit" value="modifier">
                </div>
                <?php } ?>
            </form>
        </div>
    </div>
</div>

<?php 
    include 'footer.php';
    ?>