<?php
    $tabProd = affProd();
    //var_dump($tabProd);
    
    ?>

    <div class="container">
        <div class="row">

            <h3>Liste des produits</h3>
            <?php
            
            foreach($tabProd as $row) {
                ?>
                <div class="col-lg-4">
                    <div class="card" style="width: 18rem;">
                        <img src="img/<?php echo $row['img_produit'];?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $row['nom_produit'];?></h5>
                            <p class="card-text"><?php echo $row['desc_produit'];?></p>
                            <p class="card-text"><?php echo $row['prix_produit'];?> €</p>
                            <div class="d-flex align-items-center">
                                <a href="page_un_produit.php?id=<?php echo $row['id'];?>" class="btn btn-primary">en savoir +</a>
                                <a href="#" class="btn btn-secondary">ajouter au panier</a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
    </div>