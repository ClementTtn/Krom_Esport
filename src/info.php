<?php

use App\Controller\ControllerActualites;
use App\Entity\Actualites as Actualites;

function chargerClasse($classe)
{
    $classe=str_replace('\\','/',$classe);
    require $classe . '.php';
}

spl_autoload_register('chargerClasse'); //Autoload

$Actualites = new ControllerActualites();


require 'header.php';
?>

<main>
    <h2 class="h2_sous_nav">A propos de KROM</h2>
    <p class="texte_info">KROM Esport est une équipe française de compétition automobile sur diverses simulations virtuelles.<br><br>
        Créée en 2020, elle a pour vocation de grandir et de faire grandir ses pilotes afin de devenir un acteur important du Sim Racing français.<br><br>
        Comptant sur l’expérience de ces derniers, KROM se développe constamment en s'appuyant sur ces 3 valeurs : passion, performance, ambition.<br><br>

        Au plaisir de vous croiser sur la grille de départ !
    </p>

    <p class="texte_contact">
        Une question, une demande particulière ? <br><br>
        Remplissez le formulaire ci-dessous.
    </p>


    <?php $Actualites->envoyerMessage(); ?>


</main>

<?php require 'footer.php';?>