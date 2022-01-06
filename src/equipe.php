<?php

use App\Controller\ControllerEquipe;
use App\Entity\Equipe as Equipe;

use App\Controller\ControllerDirection;
use App\Entity\Direction as Direction;

function chargerClasse($classe)
{
    $classe=str_replace('\\','/',$classe);
    require $classe . '.php';
}

spl_autoload_register('chargerClasse'); //Autoload

$Equipe = new ControllerEquipe();
$Direction = new ControllerDirection();

require 'header.php';
?>

    <main>
        <h2 class="h2_sous_nav">Direction</h2>
        <?php $Direction->findDirection(); ?>


        <h2>Pilotes</h2>
        <?php $Equipe->findEquipe(); ?>
    </main>


<?php require 'footer.php';?>
