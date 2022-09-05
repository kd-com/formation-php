<!-- 
        fonction
        afficher "hello world"

        retourner une valeur
     --> 
     <?php
    //  afficher "hello world"
    //  déclaration de la fonction
     function afficher() {
        echo "Hello World !";
     }
     afficher();
     echo "<br>";
    //  variable locale
    // function test(){
    //     $monproduit="trotinette";
    //     echo $monproduit;
    // }
    // test();
    echo "<br>";

    // 1. créer une fonction qui prend en parametre une chaine de caractère et qui affiche bonjour suivi de la chaine de caractère
    // 2.créer une fonction qui prend en parametre une chaine de caractère et qui retourne bonjour suivi de la chaine de caractère
    // 3. creer une fonction qui prend en parametre un nombre qui affiche le nombre
    // crer une fonction qui prend en parametre un nombre qui retourne le nombre
    // creer une fonction qui prend en parametre un nombre qui affiche si le nombre est > 18 ça écrit majeur si non mineur
    // creer une fonction qui prend en parametre un nombre qui affiche si le nombre est > 18 ca renvoie true ou false
    
    // 1
    function affiche($texte) {
        echo "Bonjour " .$texte;
    }
    affiche("le monde");
    // 2
    // function retourne($texte2) {
    //     $mavar="Bonjour" .$texte2;
    //     return $mavar;
    // }
    // retourne();
        echo "<br>";
    // 3
    function affichenomb($nombre) {
        echo $nombre;
    }
    affichenomb(12);
    echo "<br>";

    function retournenomb($nombre) {
        return $nombre;
    }
    echo retournenomb(15);
    echo "<br>";
    function affichesup($nombre) {
        if($nombre>18) {
            echo "Majeur!";
        } else  {
            echo "Mineur !";
        }
     }
     affichesup(20);
     echo "<br>";

     function affichetrue($nombre) {
        if($nombre>18) {
            return true;
        } else {
            return false;
        }
     }
     echo affichetrue(50);
     echo "<br>";

     function affichesuite($monchiffre) {
        for($i=5; $i<$monchiffre; $i++) {
            echo $i. " / ";
        }
     }
     affichesuite(50);

     echo "<br>";
    
     function affichesuite2($monchiffre1, $monchiffre2) {
        for($i=$monchiffre1;$i<$monchiffre2; $i++) {
            echo $i. " / ";
        }
     }
     affichesuite2(10, 50);
     echo "<br>";

    //  fonction afficher la table de multiplication en parametre
     function matable($nb1) {
        for ($i=1; $i<11; $i++) {
            echo $nb1. " x " .$i. " = " .($nb1*$i). "<br>";
        }
     }
     matable(3);
     echo "<br>";

     function retournsuite2 ($monchiffre1, $monchiffre2) {
        $montab = array();
        for($i=$monchiffre1; $i<$monchiffre2; $i++) {
            $montab[]=$i;
        }
        return $montab;
     }
     var_dump(retournsuite2(10,50));
     foreach(retournsuite2(10,50) as $value) {
        echo $value. " / ";
    }

    // créer une fonction qui prend en parametre un nombre et qui retourne ex: 5 retourne le resultat de 1+2+3+4+5
    // créer une fonction qui prend en parametre un nombre et qui retourne ex: 5 retourne le resultat de 1x2x3x4x5
    // créer une fonction qui prend en parametre un nombre et qui retourne ex: 5 retourne le calcul et le resultat de 1+2+3+4+5
    // créer une fonction qui prend en parametre un nombre et qui retourne ex: 5 retourne le calcul et le resultat de 1x2x3x4x5


     ?>