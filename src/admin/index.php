<?php
session_start();

function chargerClasse($classe)
{
    $classe = '../' . str_replace('\\','/', $classe);
    require $classe . '.php';
}

spl_autoload_register('chargerClasse');

require 'header_admin.php';
?>

<?php if(isset($_SESSION['id_admin'])) : ?>

    <main>
        <h2 class="h2_sous_nav">Administration</h2>
        <div class="liens_admin">
            <div class="liens_admin_enfant">
                <a class="a_admin" href="ajout_article.php">Ajouter un article.</a>
                <div class="redirection_admin">
                    <a href="ajout_article.php">Y accéder</a>
                </div>
            </div>

            <div class="liens_admin_enfant">
                <a class="a_admin" href="archiver_article.php">Archiver un article.</a>
                <div class="redirection_admin">
                    <a href="archiver_prog.php">Y accéder</a>
                </div>
            </div>

        </div>
    </main>


    <div class="redirection_admin_acceuil">
        <a href="logout.php">Acceuil site client</a>
    </div>

    </body>

<?php else : ?>
    <?php header('location: login_admin.php'); ?>
<?php endif ;?>

</html>