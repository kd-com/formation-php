<?php
    include 'head.php';
    include 'fonction.php';
    include 'nav_bar.php';
    include 'footer.php';

?>

<?php
    $bdd = appelBdd();
    ?>

<div class="container">
    <div class="row">
        <div class="col-12">
            <form action="inscription_enregistrer.php" method="POST">
                <div>
                    <label for="name">Nom :</label>
                    <input type="text" id="name" name="nom_user">
                </div>
                <div>
                    <label for="mail">e-mail&nbsp;:</label>
                    <input type="email" id="mail" name="mail_user">
                </div>
                <div>
                    <label for="tel">Téléphone :</label>
                    <input type="tel" id="tel" name="tel_user">
                </div>
                <div>
                    <label for="mdp">Mot de passe :</label>
                    <input type="password" id="mdp" name="mdp_user">
                </div>
                <div>
                    <input type="submit" value="créer">
                </div>
            </form>
        </div>
    </div>
</div>