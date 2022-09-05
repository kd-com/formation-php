<?php
// variable + fonction
    $produit_find = "Xiaomi";
    $pos = strpos($produit1[0], strtoupper($produit_find));
    echo $pos;

    if( strtoupper($produit1[0]) == $pos) {
        echo "C'est la marque Xiaomi !";
    } else {
        echo "c'est une autre marque !";
    }

    echo "<br>";
     
    
    // affichage age
    echo"<br>";
    $age=30;
    if($age > 1) {
        echo "majeur !";
    } else {
        echo "mineur !";
    }
    ?>
    <br>