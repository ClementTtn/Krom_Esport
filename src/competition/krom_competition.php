<?php

use App\Controller\ControllerActualites_competition;
use App\Entity\Actualites_competition as Actualites_competition;

function chargerClasse($classe)
{
    $classe = '../' . str_replace('\\','/', $classe);
    require $classe . '.php';
}

spl_autoload_register('chargerClasse'); //Autoload

$Actualites_competition = new ControllerActualites_competition();

require 'header_competition.php';
?>

    <main>
        <?php
        if(isset($_GET['id'])){
            $Actualites_competition->findOne();
        }

        else{
            $Actualites_competition->findListe();
        }
        ?>
    </main>


<?php require 'footer_competition.php';?>
