<?php
include 'head.php';
    include 'nav_bar.php';
    ?>

    <?php
    var_dump($_SESSION['user']);
    var_dump($_SESSION['tab_panier']);

    // table user
    $mail_user = $_SESSION['user'];
    $tabUser = affUtilOne($mail_user);
    
    var_dump($tabUser);
    $sql = "INSERT INTO facture (id) VALUE(?)";
    $stmt = $bdd->prepare($sql);
    $stmt->execute([NULL]);

    $stmt = $bdd->query("SELECT * FROM facture order by 'id' DESC");
    $idfacture = "";
    while($row = $stmt->fetch()) {
        $idfacture = $row['id'];
    }
    echo $idfacture;


    foreach($_SESSION['tab_panier'] as $key=>$value) {
        $sql = "INSERT INTO commande (id_commande, user_commande, idproduit_commande, quantite_commande, id_facture)
        VALUES (?,?,?,?,?)";
        $stmt= $bdd->prepare($sql);
        $stmt->execute([NULL,
         $tabUser,
         $key,
         $value,
         $idfacture
    
    ]);
    }




    ?>

<?php 
include 'footer.php';
?>