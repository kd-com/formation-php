<?php
include 'head.php';
include 'fonction.php';
include 'nav_bar.php';
include 'footer.php';

?>

<?php
    try {
    $bdd = appelBdd();
    $id = $_POST['id'];
    
    $nom = $_POST['nom_user'];
    $mail = $_POST['mail_user'];
    $tel = $_POST['tel_user'];
    

    $sql = "UPDATE user SET nom_user =?, mail_user=?, tel_user=?
        WHERE id=$id";
        $stmt= $bdd->prepare($sql);
        $stmt->execute([
         $nom,
         $mail,
         $tel
    
        //  password_hash($_POST['mdp_user'], PASSWORD_BCRYPT)
    ]);
}
    catch(PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
      }
    var_dump($_POST);

?>
    <div class="container">
    <div class="row">
        <div class="col-12 text-center">
            <p>Vos modifications sont enregistrer</p>
            <a href="index.php" class="btn btn-primary">Retour à l'accueil</a>
        </div>
    </div>
</div>