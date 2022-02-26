<?php
ini_set('display_errors', 'off');

use App\Controller\ControllerActualites;
use App\Entity\Actualites as Actualites;

function chargerClasse($classe)
{
    $classe=str_replace('\\','/',$classe);
    require $classe . '.php';
}

spl_autoload_register('chargerClasse'); //Autoload

$Actualites = new ControllerActualites();

require 'require/header.php';
?>
    <title>KROM Esport - Actualités</title>

    <main>
        <?php
        if(isset($_GET['id'])){
            $Actualites->findOne();
        }

        else{
            $Actualites->findListe();
        }
        ?>
    </main>


<?php require 'require/footer.php';?>