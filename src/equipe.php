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

require 'require/header.php';
?>
<title>KROM Esport - Équipe</title>

    <main>
        <?php
        if(isset($_GET['id_staff'])){
            $Direction->findOneStaff();
        }

        elseif(isset($_GET['id_pilote'])){
            $Equipe->findOnePilote();
        }

        else{
            $Direction->findDirection();
            $Equipe->findEquipe();
        }
        ?>
    </main>

<?php require 'require/footer.php';?>