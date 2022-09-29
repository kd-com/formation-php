<?php
    
    include 'head.php';
    include 'nav_bar.php';
    ?>

    <?php
    UNSET($_SESSION['tab_panier']);
    var_dump($_SESSION['tab_panier']);
    echo 'votre panier est vide !';
    ?>

    <?php 
    include 'footer.php';
    ?>