<?php
$paramNb=5;
// créer une fonction qui prend en parametre un nombre et qui retourne ex: 5 retourne le resultat de 1+2+3+4+5 
function resultSomme($paramNb) {
    for($i=1; $i<6; $i++) {
        echo ($paramNb+$i) . '<br>';
    }
}
 resultSomme($paramNb);
echo "-------------------------<br>";
// créer une fonction qui prend en parametre un nombre et qui retourne ex: 5 retourne le resultat de 1x2x3x4x5
function resultMulti($paramNb) {
    for($i=1; $i<6; $i++) {
        echo ($paramNb*$i) . '<br>';
    }
}
resultMulti($paramNb);
echo "-------------------------<br>";
// créer une fonction qui prend en parametre un nombre et qui retourne ex: 5 retourne le calcul et le resultat de 1+2+3+4+5
function calcResultSomme($paramNb) {
    for($i=1; $i<6; $i++) {
        echo $paramNb . '+' . $i . '=' . ($paramNb+$i) . '<br>';
    }
}
calcResultSomme($paramNb);
echo '-------------------------<br>';

// créer une fonction qui prend en parametre un nombre et qui retourne ex: 5 retourne le calcul et le resultat de 1x2x3x4x5
function calcResultMulti($paramNb) {
    for($i=1; $i<6; $i++) {
        echo $paramNb . 'x' . $i . '=' . ($paramNb*$i) . '<br>';
    }
}
calcResultMulti($paramNb);

    ?>