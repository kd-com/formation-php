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
    var_dump($_POST);
    $stmt = $bdd->query("SELECT * FROM user WHERE mail_user = '$mail'");
    while($row = $stmt->fetch()) {
        if(
            ($mail == $row['mail_user']) && (password_verify($mdp, $row['mdp_user']))
            ) {
                $_SESSION['user'] = $row['mail_user'];
                include 'fiche_user.php';
        } else {
            echo 'ko';
        }
    }
    
    }

// deconnexion utilisateur
function delog() {
    unset($_SESSION['user']);
}
    
// ajout de produit
function ajoutProduit() {
   $bdd = appelBdd();
$nom = $_POST['nom_produit'];
$desc = $_POST['desc_produit'];
$prix = $_POST['prix_produit'];
$img = $_FILES['img_produit']['name'];
echo $img;


$sql = "INSERT INTO produit (id, nom_produit, desc_produit, prix_produit, img_produit)
    VALUES (?,?,?,?,?)";
    $stmt= $bdd->prepare($sql);
    $stmt->execute([NULL,
     $nom,
     $desc,
     $prix,
     $img

]);
}
// suppression produit
function suppProd() {
try {
    $bdd = appelBdd();
    $id = $_GET['id'];
    

    $sql = "DELETE FROM produit WHERE id=?";
        $stmt= $bdd->prepare($sql);
        $stmt->execute([
            $id
         
    ]);
}
    catch(PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
      }
    }

// afficher les produit
function affProd() {
    $bdd = appelBdd();
    // 2. REQUETE SQL qui récupere les données de la table produit
    $stmt = $bdd->query("SELECT * FROM produit");
    $tabProd = array();
    while($row = $stmt->fetch()) {
        $tabProd[] = $row;
    }
    return $tabProd;


}

// liste utilisateur
function affUtil() {
    $bdd = appelBdd();
    $stmt = $bdd->query("SELECT * FROM user");
    $tabUser = array();
    while($row = $stmt->fetch()) {
        $tabUser[] = $row;
    }
    
    return $tabUser;
}
