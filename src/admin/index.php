<?php
include ('../connexion.php');
$connexion=connexionBd();

require 'header_admin.php';
?>

<?php if(isset($_SESSION['id_admin'])) : ?>

    <body>

    <div class="a_admin">
        <main>
            <h2 class="h2_sous_nav"><a href="ajout_article.php">Ajouter une programmation Krom</a></h2><br>
            <h2><a href="ajout_article_competition.php">Ajouter une programmation Krom Competition</a></h2><br>
            <h2><a href="ajout_admin.php">Autoriser une personne à accéder à la partie administration.</a></h2><br>
        </main>


        <!-- Lien vers index.php -->
        <h3 class="index_client"><a href="../index.php">Acceuil site client</a></h3>

        <h3 class="index_client"><a href="logout.php">Déconnexion</a></h3>
    </div>

    </body>

<?php else : ?>
    <?php header('location: logout.php'); ?>
<?php endif ;?>

</html>
