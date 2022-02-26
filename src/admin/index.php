<?php
session_start();

function chargerClasse($classe)
{
    $classe = '../' . str_replace('\\','/', $classe);
    require $classe . '.php';
}

spl_autoload_register('chargerClasse');

require 'header-admin.php';
?>

<?php if(isset($_SESSION['id_admin'])) : ?>

    <main>
        <h2 class="h2_sous_nav">Bonjour <?=$_SESSION['prenom_admin']?></h2>
        <div class="liens_admin">
            <div class="liens_admin_enfant">
                <a class="a_admin">Ajouter un article.</a>
                <div class="redirection_admin">
                    <a href="ajout-article">Y accéder</a>
                </div>
            </div>

            <div class="liens_admin_enfant">
                <a class="a_admin">Modification d'un article.</a>
                <div class="redirection_admin">
                    <a href="modifier-article">Y accéder</a>
                </div>
            </div>

            <div class="liens_admin_enfant">
                <a class="a_admin">Ajouter une date.</a>
                <div class="redirection_admin">
                    <a href="ajout-calendrier">Y accéder</a>
                </div>
            </div>

            <div class="liens_admin_enfant">
                <a class="a_admin">Modification d'une date.</a>
                <div class="redirection_admin">
                    <a href="modifier-calendrier">Y accéder</a>
                </div>
            </div>

        </div>
    </main>


    <div class="redirection_admin_acceuil">
        <a href="logout">Déconnexion</a>
    </div>

    </body>

<?php else : ?>
    <?php header('location: login-admin'); ?>
<?php endif ;?>

</html>