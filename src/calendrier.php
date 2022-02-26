<?php
use App\Controller\ControllerCalendrier;
use App\Entity\Calendrier as Calendrier;

function chargerClasse($classe)
{
    $classe=str_replace('\\','/',$classe);
    require $classe . '.php';
}

spl_autoload_register('chargerClasse'); //Autoload

$Calendrier = new ControllerCalendrier();

require 'require/header.php';
?>
<title>KROM Esport - Calendrier</title>

<meta property="og:site_name" content="KROM Esport">
<meta property="og:image" content="https://krom-esport.fr/img/logos/krom_logo.png">
<meta property="og:title" content="Calendrier de KROM Esport">
<meta property="og:description" content="Tenez-vous informé de nos prochaines courses.">
<meta name="description" content="Tenez-vous informé de nos prochaines courses.">

<?php $Calendrier->findCalendrier(); ?>

<?php require 'require/footer.php'?>
