<?php
include 'head.php';
include 'fonction.php';
include 'nav_bar.php';
include 'footer.php';

?>

<?php
$bdd = appelBdd();

$nom = $_POST['nom_user'];
$mail = $_POST['mail_user'];
$tel = $_POST['tel_user'];
$mdp = $_POST['mdp_user'];

$sql = "INSERT INTO user (nom_user, mail_user, tel_user, mdp_user) VALUES (?,?,?,?)";
$pdo->prepare($sql)->execute([$nom, $mail, $tel, $mdp]);
?>
<div class="container">
    <div class="row">
        <div class="col-12 text-center">
            <p>Merci pour votre inscription</p>
            <a href="index.php" class="btn btn-primary">Retour à l'accueil</a>
        </div>
    </div>
</div>