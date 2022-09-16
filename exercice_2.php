<?php
// EXO 1 : une fonction qui prend en parametre un tableau de valeur et qui renvoi la moyenne de ces valeurs
function moyenneValeur($valeur) {
    $rValeur = 0;
    for($i=0; $i<=count($valeur)-1; $i++) {
        
        $rValeur = $valeur[$i] + $rValeur;
    }
    $rValeur = $rValeur / count($valeur);
    return $rValeur;
}
$tabValeur = [10, 20, 30];
echo moyenneValeur($tabValeur);
echo '<br>--------------<br>';



// EXO 2 : Une fonction qui prend en parametre un tableau de valeur et qui renvoie le tableau inversé
function inverseTab($inValeur) {
    $iValeur = array();
    for ($i=count($inValeur); $i>=0; $i--) {
        $iValeur[$i] = $inValeur[$i];
    }
    return $iValeur;

}
$tableau = [10, 20, 30];
var_dump(inverseTab($tableau));
echo '<br>----------------<br>';

// EXO 3 : Une fonction qui prend en parametre un tableau de valeur et qui renvoie la valeur max
// parametre une tableau
// sortie un nombre
function tabMax($ptab) {
    $max = 0;
    for($i=0; $i<count($ptab); $i++) { // je lis la valeur du tour de boucle
        
        if($ptab[$i] > $max) {
            $max = $ptab[$i];
        }
    }
    return $max;
}
$monTableau = [1, 45, 25, 60];
echo 'max du tableau : '. tabMax($monTableau) . '<br>-------------------<br>';

// EXO 3 : Une fonction qui prend en parametre un tableau de valeur et qui renvoie la valeur min
function tabMin($ptab) {
    $min = 999999999999;
    for($i=0; $i<count($ptab); $i++) {
        if($ptab[$i] < $min) {
            $min = $ptab[$i];
        }
    }
    return $min;
}
$montableau2 = [500, 23, 24, 10, 89];
echo 'min du tableau : '. tabMin($montableau2) . '<br>-------------------<br>';


// // EXO 3 : Une fonction qui prend en parametre un tableau de valeur et qui renvoie la valeur max et min
// $tableau = [tabMin($montableau2), tabmax($monTableau)];
// var_dump($tableau);
echo '<br>';

function minmax($tab) {
    $tabl = array();
    $tabl[] = tabMin($tab);
    $tabl[] = tabMax($tab);
    return $tabl;
}
$extabl = [1, 50, 10, 55];
var_dump(minmax($extabl));
echo '<br>';


