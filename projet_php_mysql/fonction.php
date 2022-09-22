<?php
function appelBdd() {
    // 1. connexion à la bdd

    $bdd=new PDO('mysql:host=127.0.0.1;port=8889;dbname=site_exercice', 'root','root');
    
    return $bdd;
}
// inscription utilisateur
function inscriUtilisateur() {
    $bdd = appelBdd();

$nom = $_POST['nom_user'];
$mail = $_POST['mail_user'];
$tel = $_POST['tel_user'];
$mdp = $_POST['mdp_user'];


$sql = "INSERT INTO user (id, nom_user, mail_user, tel_user, mdp_user)
    VALUES (?,?,?,?,?)";
    $stmt= $bdd->prepare($sql);
    $stmt->execute([NULL,
     $nom,
     $mail,
     $tel,
     password_hash($mdp, PASSWORD_BCRYPT)

    //  password_hash($_POST['mdp_user'], PASSWORD_BCRYPT)
]);
}
// connexion utilisateur
function connexUtil() {
    $bdd = appelBdd();
    $nom = $_POST['nom_user'];
    $mail = $_POST['mail_user'];
    $tel = $_POST['tel_user'];
    $mdp = $_POST['mdp_user'];
    
    $stmt = $bdd->query("SELECT * FROM `user` WHERE `mail_user` LIKE '$mail'");
    while($row = $stmt->fetch()) {
        if(
            ($mail == $row['mail_user']) && (password_verify($mdp, $row['mdp_user']))
            ) {
            echo 'ok';
        } else {
            echo 'ko';
        }
    }
    
    }
    
// ajout de produit
function ajoutProduit() {
    $bdd = appelBdd();

$nom = $_POST['nom_produit'];
$desc = $_POST['desc_produit'];
$prix = $_POST['prix_produit'];
$img = $_POST['img_produit'];


$sql = "INSERT INTO produit (id, nom_produit, desc_produit, prix_produit, img_produit)
    VALUES (?,?,?,?,?)";
    $stmt= $bdd->prepare($sql);
    $stmt->execute([NULL,
     $nom,
     $desc,
     $prix,
     $img,

]);
}
