<?php
session_start();

 include 'fonction.php';


    //var_dump($_SESSION);
 include 'connexion_bdd.php';

    
    supquantite();
    header("location:" . "voir_panier.php");
    ?>