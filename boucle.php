<!-- les boucles -->
<?php
    // afficher les nombre de 0 à 50
    // boucle for
    for ($i=0; $i<50; $i=$i+1) {
        echo $i;
    }
    echo "<br>";
    //  afficher le caractère * 50 fois
    $repeat = "*";
    for($i=0; $i<50; $i=$i+1) {
        echo $repeat;
    }
    echo"<br>";
    echo str_repeat($repeat, 50);
    ?>
    <br>
    <?php
    // afficher la table de multiplication de 2
    for($i=1; $i<11; $i=$i+1) {
        // echo "2 x " .$i. " = 2" *$i ;
        echo "2 x " .$i. " = " .(2*$i). "<br>";
    }
    // boucle de 1 à 10
    // afficher toutes les tables de multiplication
    for($j=1; $j<11; $j=$j+1) {
        echo "table de " .$j."<br>";
        for($i=1;$i<11;$i=$i+1) {
            echo $j. " x " .$i. " = " .($j*$i). "<br>";
        }
    }
    ?>
    <br>
    <!-- boucler sur un tableau -->
    <?php
    $user=["Kevin","Deffay",38,true,false];
    // exemple on l'utilise pas
    for($i=0; $i<count($user); $i++) {
        echo $user[$i];
    }
    echo"<br>";
    // boucle foreach
    foreach($user as $key=>$value) {
        echo $key ." => ". $value. "<br>";
    }
    ?>

    <!-- boucle while -->
    <br>
    <?php 
    // $i=0;
    // while($i<10) {
    //     echo "bonjour";
    //     if($val==2) {
    //         $i++;
    //     }
    // }
    ?>