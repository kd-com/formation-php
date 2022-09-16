<?php
$paramNb=5;
// créer une fonction qui prend en parametre un nombre et qui retourne ex: 5 retourne le resultat de 1+2+3+4+5 
// function resultSomme($paramNb) {
//     for($i=1; $i<6; $i++) {
//         echo ($paramNb+$i) . '<br>';
//     }
// }
//  resultSomme($paramNb);
// echo "-------------------------<br>";
// CORRECTION
?>
<?php

/*
$tableau= [ 12,34,34  ];
echo $tableau[2];
$tableau[2]="toto";
$tabbleau[]="tRET";
*/
// avec tableau
function resultSomme($paramNb) {
    $tab=array(); // initialiser un tableau
    $info=0;   //initialiser une variable stockant l evolution de i

    var_dump($tab);
    for($i=1; $i<=$paramNb  ; $i++) {

        $info=$i + $info;


        $tab[]=$info;
        var_dump($tab);
        echo ($paramNb+$i) . '<br>';
    }

    return $tab[count($tab)-1];


}

echo resultSomme(5);
echo '<br>';

//  version simplifier
function resultSomme_s($paramNb) {
    $info=0;   //initialiser une variable stockant l evolution de i

    for($i=1; $i<=$paramNb  ; $i++) {

        $info=$i + $info;


    }

    return $info;


}
echo resultSomme_s(5);

echo "<br>-------------------------<br>";


// RECUPER UNE INFORMATION : UNE VARIABLE $result reçoit la derniere info
// return $result
// return $tab[$paramNb] $tab$tab.count()
// 1 + 2 +3 +4 +5
// BOUCLE
//   vARIBLE RESULTAT STOCKE <= l evolution de i 




// créer une fonction qui prend en parametre un nombre et qui retourne ex: 5 retourne le resultat de 1x2x3x4x5
// function resultMulti($paramNb) {
//     for($i=1; $i<6; $i++) {
//         echo ($paramNb*$i) . '<br>';
//     }
// }
// resultMulti($paramNb);
function resultMulti($paramNb) {
    $info2=1;   //initialiser une variable stockant l evolution de i
    $tabResult = array();

    for($i=1; $i<=$paramNb  ; $i++) {

        $info2=$i*$info2;


    }

    return $info2;


}
echo resultMulti(5);
echo "<br>-------------------------<br>";

function calcResultMulti($paramNb) {
    $info3=1;   //initialiser une variable stockant l evolution de i
    $tabResult = array();

    for($i=1; $i<=$paramNb  ; $i++) {
        $tabResult[] = 'calcul :'. $i . 'x'. $info3;
        $info3=$i*$info3;
        


    }

    return $tabResult;


}
var_dump (calcResultMulti(5));
echo "<br>-------------------------<br>";


// créer une fonction qui prend en parametre un nombre et qui retourne ex: 5 retourne le calcul et le resultat de 1+2+3+4+5
// function calcResultSomme($paramNb) {
//     for($i=1; $i<6; $i++) {
//         echo $paramNb . '+' . $i . '=' . ($paramNb+$i) . '<br>';
//     }
// }
// calcResultSomme($paramNb);
// echo '-------------------------<br>';

// // créer une fonction qui prend en parametre un nombre et qui retourne ex: 5 retourne le calcul et le resultat de 1x2x3x4x5
// function calcResultMulti($paramNb) {
//     for($i=1; $i<6; $i++) {
//         echo $paramNb . 'x' . $i . '=' . ($paramNb*$i) . '<br>';
//     }
// }
// calcResultMulti($paramNb);

// EXO : une fonction qui prend en parametre de valeur et qui renvoi la somme de ces valeurs.

function sommevaleur($tabValeur) {
    $resultValeur = 0;
    
    for ($i=0; $i<= count($tabValeur)-1; $i++) {
        //echo $resultValeur . ' ';
        $resultValeur = $tabValeur[$i]+$resultValeur;
    }
    return $resultValeur;

}
$tableauValeur = [1, 2, 3];
echo sommevaleur($tableauValeur);





    ?>