<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- lien vers ressource -->
    <?php
    // liste des users
    // 1. connexion à la bdd

    $bdd=new PDO('mysql:host=127.0.0.1;port=8889;dbname=formation_php', 'root','root');
    // $dsn = 'mysql:dbname=testdb;host=127.0.0.1;port=3333';

    var_dump($bdd);

    // 2. REQUETE SQL qui récupere les données de la table user
    $stmt = $bdd->query("SELECT * FROM user");
    var_dump($stmt);

    echo '<br>LISTE DES MAILS USERS <br>';

    while($row = $stmt->fetch()) {
        echo '<br>'.$row['id']. ' / '. $row['email']. "\n";
        echo '<br><a href="info-user.php?id='. $row['id']. '">'. $row['user']. '</a><br>';
    }

    // 3. on les affiches

    // EXO : lorsque on clique sur un des users > on va avoir une nouvelle une nouvelle page qui affiche la page utilisateur
    // une nouvelle page php qui va recevoir les données POST / GET
    while($row = $stmt->fetch()) {
        echo '<br><a href="info-user.php?id='. $row['id']. '">'. $row['user']. '</a><br>';
    }


    // afficher à partir de la base les infos du users.
    ?>
</body>
</html>