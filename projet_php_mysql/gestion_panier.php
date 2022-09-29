<?php
    
    include 'head.php';
    include 'nav_bar.php';
    ?>
<!-- 1 COMMANDE -->
<!-- stockage ID PRODUIT, QUANTITÉ -->
<!--                1          2     -->

<!-- VARIABLE COOKIES
NUMERIQUE -> TABLEAU -> 1 IDENTIFIANT QUI VA AVOIR UNE QANTITÉ

AJOUTER AU PANIER
CAS 1 LE PANIER VIDE -> CRÉER PANIER VIDE -> AJOUTER UN PRODUIT ID ET QUANTITÉ À 1
CAS 2 LE PANIER EXISTE -> AJOUTE AU PANIER UN NOUVEAU PANIER
CAS 3 LE PANIER EXISTE -> AJOUTER AU PANIER UN PRODUIT EXISTANT -> MISE À JOUR QUANTITÉ = Q+1 -->

<?php
// créer un nouveau panier
//  $_SESSION['tab_panier][GET ID] = 1 (quantité)
// VIDER LE PANIER UNSET($_SESSION["tab_panier]);
$id_prod = $_GET['id'];
$qt_prod = 1;
echo $id_prod;
if(!isset($_SESSION['tab_panier'])) {
    $_SESSION['tab_panier'] = array();
}

//$tab_panier[$_get['id'], 1];


if(array_key_exists($id_prod, $_SESSION['tab_panier'])) {
    $_SESSION['tab_panier'] [$id_prod] =  $_SESSION['tab_panier'] [$id_prod]+1;
    echo '<br>le produit est déjà dans mon panier';
} else {
    
    $_SESSION['tab_panier'] [$id_prod] =  $qt_prod;
    echo '<br>le produit n\'est pas dans le panier';
}
echo '<br>';
var_dump($_SESSION['tab_panier']);



// $search_array = array('first' => 1, 'second' => 4);
// if (array_key_exists('first', $search_array)) {
//     echo "The 'first' element is in the array";
// }


?>
<div class="container">
    <div class="row">
        <div class="col-12 text-center">
            <a class="btn btn-primary" href="vider_panier.php">Vider mon panier</a>
            <a class="btn btn-primary" href="voir_panier.php">Voir mon panier</a>
        </div>
    </div>
</div>
<?php
   
include 'footer.php';

?>