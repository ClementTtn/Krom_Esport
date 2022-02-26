<?php
session_start();

ini_set('display_errors', 'off');

use App\Controller\ControllerActualites;
use App\Entity\Actualites as Actualites;

function chargerClasse($classe)
{
    $classe='../' . str_replace('\\','/',$classe);
    require $classe . '.php';
}

spl_autoload_register('chargerClasse'); //Autoload

$Actualites = new ControllerActualites();


require 'header-admin.php';
?>

<?php if(isset($_SESSION['id_admin'])) : ?>

    <?php
    if(isset($_GET['id'])){
        $Actualites->archiverArticle();
    }

    else{
        header('location: modifier-article');
    }
    ?>

<?php else : ?>
    <?php header('location: login-admin'); ?>
<?php endif ; ?>
