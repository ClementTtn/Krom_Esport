<?php
session_start();

use App\Controller\ControllerAdmin;
use App\Entity\Admin as Admin;

function chargerClasse($classe)
{
    $classe = '../' . str_replace('\\','/', $classe);
    require $classe . '.php';
}

spl_autoload_register('chargerClasse');

$Admin = new ControllerAdmin();

foreach( $_POST as $cle => $valeur){
    $value[$cle] = htmlspecialchars($valeur);
}

require 'header-admin.php';
?>

<?php $Admin->login_admin(); ?>

<script src="../js/main.js"></script>

<script src="../js/mdp.js"></script>

<?php require ('../require/footer.php');