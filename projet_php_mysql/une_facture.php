<?php
include 'head.php';
    include 'nav_bar.php';
    function affPanier($id_prod_p) {
        $bdd = appelBdd();
        $panier_full = array();
        $stmt = $bdd->query("SELECT * FROM produit WHERE `id` LIKE '$id_prod_p'");
        while($row = $stmt->fetch()) {
            $panier_full[] = $row;
        }
        return $panier_full;
    }

    $id_facture = $_GET['id'];
    $detailfacture = array();
    
    $stmt = $bdd->query("SELECT * FROM commande WHERE id_facture = '$id_facture'");
    
    while($row = $stmt->fetch()) {
        $detailfacture[] = $row;
        echo 'commande n°'. $row['id_commande'].'<br>';
        echo 'produit id de la commande' . $row['idproduit_commande']. '<br>';

    }
    var_dump($detailfacture);
    $panier_full2 = array();
    foreach($detailfacture as $row) {
        echo '<br>'.$row['idproduit_commande']. "<br>";
        $panier_full2[]=['produit'=> affPanier($row['idproduit_commande'])];
        //var_dump(affPanier($key));
    }
    var_dump($panier_full2);
include 'footer.php'; 
?>