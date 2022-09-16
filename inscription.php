<?php 
    session_start();
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="inscription.php" method="POST">
        Nom utilistateur<br><input type="text" name="nom_utilistateur"><br>
        Mot de passe<br><input type="password" name="mot_de_passe"><br>
        email<br><input type="email" name="email"><br>
        <input type="submit" value="clic">
    </form>
    <?php
    var_dump($_POST);
    echo '<br>';
    ?>
    <form action="inscription.php" method="POST">
        <input type="email" name="email2">
        <textarea name="message" row="5" cols="10"></textarea>
        <input type="submit" value="envoyer">
    </form>
    <?php
    var_dump($_POST);
    echo '<br>';
    ?>

<!-- // afficher les nombres de 1 à 10 et faire que l'orsque on clique sur 1 cela affiche page 1
//                                                                   2                  2 -->

<nav>
    <ul>
        <?php 
        for ($i=0; $i<=10; $i++) {
            echo '<li><a href="inscription.php?page='.$i.'">'.$i.'</a></li>';
        }
        ?>
    </ul>
</nav>
  <?php
  var_dump($_GET);
  ?>


<!-- garder les données en post et en get -->
<?php

// demmarrer le stockage session
// SESSION STOCKER DES DONNÉES SUR TOUTES LES PAGES TANT QUE JE NE LES AI PAS SUPP.
// CRÉER UN FICHIER SUR LE SERVEUR QUI DIT JE RECONNAIS L'ORDINATEUR QUI À ENREGISTRER TELLE DONNÉE ET JE L'ENREGISTRE
?>
<?php

?>

<form action="/inscription.php" method="POST">
    <div>
        <label for="name">Nom :</label>
        <input type="text" id="name" name="user_name">
    </div>
    <div>
        <label for="mail">e-mail&nbsp;:</label>
        <input type="email" id="mail" name="user_mail">
    </div>
    <div>
        <label for="mdp">Mot de passe :</label>
        <input type="password" id="mdp" name="user_pass">
    </div>
    <div>
        <input type="submit" value="créer">
    </div>
</form>
<?php
$_SESSION['user name']= $_POST['user_name'];
$_SESSION['email']= $_POST['user_mail'];
$_SESSION['pass']= $_POST['user_pass'];
echo '<br>';
var_dump($_SESSION);
?>

<?php




// COCKIE STOCKER DES DONNEES SUR TOUTES LES PAGE TANT QUE JE NE LES AI PAS SUPP.
// CRÉER UN FICHIER SUR LE POSTE DE L'UTILISTATEUR QUI DIT JE RECONNAIS L'ORDINATEUR QUI À ENREGISTRER TELLE DONNÉE ET JE L'ENREGISTRE.
?>


</body>
</html>