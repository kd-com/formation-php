<?php
    include 'head.php';
    include 'nav_bar.php';

?>

<?php

    ?>

    

<div class="container">
    <div class="row">
        <div class="col-12">
            <form action="connexion_reussi.php" method="POST">
            <div>
                    <label for="mail">e-mail&nbsp;:</label>
                    <input type="email" id="mail" name="mail_user">
                </div>
                <div>
                    <label for="mdp">Mot de passe :</label>
                    <input type="password" id="mdp" name="mdp_user">
                </div>
                <div>
                    <input type="submit" value="se connecter">
                </div>
            </form>
        </div>
    </div>
</div>

<?php 
    include 'footer.php';
    ?>