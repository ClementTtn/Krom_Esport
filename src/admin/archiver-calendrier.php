<?php
session_start();

use App\Controller\ControllerCalendrier;
use App\Entity\Calendrier as Calendrier;

function chargerClasse($classe)
{
    $classe='../' . str_replace('\\','/',$classe);
    require $classe . '.php';
}

spl_autoload_register('chargerClasse'); //Autoload

$Calendrier = new ControllerCalendrier();


require 'header-admin.php';
?>

<?php if(isset($_SESSION['id_admin'])) : ?>

    <?php
    if(isset($_GET['id'])){
        $Calendrier->archiverCalendrier();
    }

    else{
        header('location: modifier-calendrier');
    }
    ?>

<?php else : ?>
    <?php header('location: login-admin'); ?>
<?php endif ; ?>
