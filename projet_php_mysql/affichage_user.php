    <?php 
    $tabUser = affUtil();
    //var_dump($tabUser);
    ?>
    <div class="container">
        <div class="row">
            
            <h3>Liste des users</h3>
            <?php
            
            foreach($tabUser as $row) {
                ?>
                <div class="col-lg-4">
                    <div class="card mb-3" style="width: 18rem;">
                        
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