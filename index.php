
    <?php 
    include 'header.php';
    ?>
    <!-- générer du html en affichant ce qu'on écrit dans le echo -->
    <?php
    echo "test";
    ?>
    du html

    <p>
        <!-- 
            1. variables
            2.les conditions
            3. les boucles
            4. les fonctions
         -->

         <!-- 
            1. variable : sql => nom_produit = trotinette
            local (fonction)
            global (page)
            super globale (session (fichier coté serveur stock les variables), cookies (fichier côté client), get (par l'url), post (formulaire - cacher les mdp))
            
            2. condition : créer une interface adapté selon les besoin :  ex... utilisateur qui à prime  on lui affiche ses avantages PRIME

            3. boucles : travailler sur un ensemble d'information que l'on va déplier

            4. Les fonctions :  bout de code qui va s'encapsuler avec un nom
        -->

          <?php
        //   var_dump($GLOBALS);
          ?>

</p>

<p>
    <?php
<<<<<<< HEAD
    // include 'variable.php';
    // include 'fonction.php';
    // include 'boucle.php';
    include 'function.php';
    ?>
    

     
=======
    include 'variable.php';
    include 'fonction.php';
    include 'boucle.php';
    ?>
>>>>>>> e9bc6c00bb77e19b11072d7a05a979b7315f9773


    

    
</p>

    <p>MON FOOTER ....</p>
</body>
</html>