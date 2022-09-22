<?php
function appelBdd() {
    // 1. connexion à la bdd

    $bdd=new PDO('mysql:host=127.0.0.1;port=8889;dbname=site_exercice', 'root','root');
    
    return $bdd;
}