<?php
session_start();

use App\Controller\ControllerActualites;
use App\Entity\Actualites as Actualites;

function chargerClasse($classe)
{
    $classe='../' . str_replace('\\','/',$classe);
    require $classe . '.php';
}

spl_autoload_register('chargerClasse'); //Autoload

$Actualites = new ControllerActualites();


require 'header_admin.php';
?>

<?php if(isset($_SESSION['id_admin'])) : ?>

    <?php $Actualites->ajouterArticle(); ?>

<?php else : ?>
    <?php header('location: login_admin.php'); ?>
<?php endif ; ?>