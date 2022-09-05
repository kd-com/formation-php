<!--  les variables -->
<?php
    $produit_nom="trotinette"; // chaine de caractère : string
    $produit_prix=500; // nombre : prix : integer

    $produit_prix_tva= $produit_prix * 1.2;

    echo gettype($produit_nom);

    // concatener ?
    echo "Nom de la trotinette : " .$produit_nom. "Prix : " .$produit_prix;

    // tableau
    ?>
    <br>
    <?php
    $produit1=["XIAOMI M365", 500, 520, "description du produit !"];
    // affichage du tableau
    var_dump($produit1);
    ?>
    <br>
    <?php

    // affichage des données en mode test
    echo $produit1[0]. " / " .$produit1[1]. " / " .$produit1[2]. " / " .$produit1[3];

    ?>
    <br>
    <?php
    // Changer le prix du produit
    $produit1[1]=$produit1[1]+100;
    var_dump($produit1);
    ?>

    <br>
    <?php
    // si la variable produit nom contient Xiaomi on écrit "c'est la marque xiaomi ! si non autre que marque Xiaomi
    // == égal valeur
    // === égal valeur et type
    // != différent de valeur
    echo "<br>";

    if ( $produit1[0] == "XIAOMI M365") {
        echo "c'est égal !";
    }

    echo"<br>";