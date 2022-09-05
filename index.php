
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
            variable : sql => nom_produit = trotinette
            local (fonction)
            global (page)
            super globale (session (fichier coté serveur stock les variables), cookies (fichier côté client), get (par l'url), post (formulaire - cacher les mdp))
          -->

          <?php
          var_dump($GLOBALS);
          ?>

</p>

    <p>MON FOOTER ....</p>
</body>
</html>