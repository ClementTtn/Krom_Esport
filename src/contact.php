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
    <h2 class="h2_sous_nav">Nous contacter</h2>
    <p class="texte_contact">
        Une question, une demande particulière ? <br><br>
        Remplissez le formulaire ci-dessous.
    </p>

    <?php $Actualites->envoyerMessage(); ?>

</main>

<?php require 'footer.php';?>