<?php
include 'head.php';
    include 'nav_bar.php';
    ?>
<!-- créer une fonction qui prend en, parametre un id et qui renvoi un tableau  -->
    <?php
    var_dump($_SESSION['tab_panier']);

    function affPanier($id_prod_p) {
        $bdd = appelBdd();
        $panier_full = array();
        $stmt = $bdd->query("SELECT * FROM produit WHERE `id` LIKE '$id_prod_p'");
        while($row = $stmt->fetch()) {
            $panier_full[] = $row;
        }
        return $panier_full;
    }
    // var_dump(affPanier(1));
    function getpanier() {
        $panier_full2 = array();
    foreach($_SESSION['tab_panier'] as $key=>$value) {
        //echo '<br>'.$key ." => ". $value. "<br>";
        $panier_full2[]=['produit'=> affPanier($key), 'quantite'=> $value];
        //var_dump(affPanier($key));
    }
    
    return $panier_full2;
    }






?>

<?php
    //$ligne_pannier = 0;
    
?>
<div class="container mt-5">
    <div class="row">
        <table>
            <th scope="col">NUM</th>
            <th scope="col">ID_PRODUIT</th>
            <th scope="col">NOM</th>
            <th scope="col">PRIX</th>
            <th scope="col">DESCRIPTION</th>
            <th scope="col">QUANTITE</th> 
            <th scope="col">PRIX TOTAL (P. * Q.)</th>
            <?php
                $compteur = 1;
                
                

                foreach(getpanier() as $row) {
                ?>
                <tr>
                    <td><?php echo ($compteur);?></td>
                    <td><?php echo $row['produit'][0]['id'];?></td>
                    <td><?php echo $row['produit'][0] ['nom_produit'];?></td>
                    <td><?php echo $row['produit'][0]['prix_produit'];?>€</td>
                    <td><?php echo $row['produit'][0]['desc_produit'];?></td>
                    <td><a href="sup-produit.php?id=<? echo $row['produit'][0]['id'];?>" class="btn btn-primary">-1</a> 
                        <?php echo $row['quantite'];?> 
                        <a href="add_produit.php?id=<? echo $row['produit'][0]['id'];?>" class="btn btn-primary">+1</a>
                    </td>
                    <td><strong><?php echo ($row['produit'][0]['prix_produit']*$row['quantite']);?> €</strong></td>

                </tr>
                <?php
                
                ?>
                <?php
                //var_dump($row);
                $compteur++;
            }
            
        ?>
        </table>
        <div class="col-12 text-right">
            <p>Total de mon panier : <strong><?php 
            echo afftotalpanier();
            ?> €<strong></p>
        </div>
    </div>
</div>
      
      
      
      
      
      <?php

    

    // $tab_produit_full[]=[
    //     'product'=>$produit,
    //     'quantite'=>$value
    //  ]; 
// affichage produit -> aller dans mon panier et de boucler sur le tableau (foreach() récup la base de donnée produit et faire un tableau)
// 1.BOUCLER SUR TON TABLEAU
// 2. ENRICHIR UN NOUVEAU TABLEAU
	// 2.1 TA LIGNE DE TON TAB D ORIGINE
    // 2.2 UN AUTRE ELEMENT CORRESPONDANT AUX INFOS DE LA TABLE PRODUIT DE TON ID QUE TU PARCOURS
// 3. FIN DE TA BOUCLE
// $pan_prod = $_SESSION['tab_panier'];
// echo'<br>tableau pan_prod<br>';
// var_dump($pan_prod);
// echo'<br>';
// function affProdpan() {
//     $bdd = appelBdd();
//     // 2. REQUETE SQL qui récupere les données de la table produit
//     $stmt = $bdd->query("SELECT * FROM produit");
//     $tabProd = array();
//     while($row = $stmt->fetch()) {
//         $tabProd[] = $row;
//     }
//     return $tabProd;


// }

// $tabProd = affProdpan();
// var_dump($tabProd);

// foreach($tabProd as $row) {
// }


    // function();
    ?>

<div class="container">
    <div class="row">
        <div class="col-12 text-center">
            <a class="btn btn-primary" href="vider_panier.php">Vider mon panier</a>
            <a class="btn btn-primary" href="passer_commande.php">Passer la commande</a>
        </div>
    </div>
</div>



    <?php 
    include 'footer.php';
    ?>