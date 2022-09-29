<?php
session_start();

 include 'fonction.php';


    //var_dump($_SESSION);
 include 'connexion_bdd.php';

    
    addquantite();
    header("location:" . "voir_panier.php");
    ?>
