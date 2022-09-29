<?php
include 'head.php';
    include 'nav_bar.php';
    ?>
    <?php 
    $id_user = $_GET['id'];
    $stmt = $bdd->query("SELECT * FROM facture");
    while($row = $stmt->fetch()) {
        echo '<a href="une_facture.php?id='.$row['id'].'">facture n°'. $row['id'].'</a><br>';
    }
    ?>
<?php 
include 'footer.php'; 
?>