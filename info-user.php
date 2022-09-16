<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $bdd=new PDO('mysql:host=127.0.0.1;port=8889;dbname=formation_php', 'root','root');
    // $dsn = 'mysql:dbname=testdb;host=127.0.0.1;port=3333';

    var_dump($bdd);

    // 2. REQUETE SQL qui récupere les données de la table user
    $id = $_GET['id'];
    $stmt = $bdd->query("SELECT * FROM user WHERE id=$id");
    var_dump($stmt);
    
    while($row = $stmt->fetch()) {
       echo $row['email'];
    }
    ?>
    
</body>
</html>