<?php
    $bdd = appelBdd();
    ?>

    <div class="container">
        <div class="row">
            <?php
            
             // 2. REQUETE SQL qui récupere les données de la table user
            $stmt = $bdd->query("SELECT * FROM user");
            

            ?>
            <h3>Liste des users</h3>
            <?php
            
            while($row = $stmt->fetch()) {
                ?>
                <div class="col-lg-4">
                    <div class="card" style="width: 18rem;">
                        
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $row['nom_user'];?></h5>
                            <p class="card-text"><?php echo $row['mail_user'];?></p>
                            <p class="card-text"><?php echo $row['tel_user'];?></p>

                            <div class="d-flex align-items-center">
                                <a href="fiche_user.php?id=<?= $row['id'];?>" class="btn btn-primary">en savoir +</a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
        <div class="row">
            <div class="col-12">
                <a href="inscription.php" class="btn btn-primary">créer un compte</a>
            </div>
        </div>
    </div>