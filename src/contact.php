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


require 'require/header.php';
?>
<title>KROM Esport - Contact</title>

<meta property="og:site_name" content="KROM Esport">
<meta property="og:image" content="https://krom-esport.fr/img/logos/krom_logo.png">
<meta property="og:title" content="Contacter KROM Esport">
<meta property="og:description" content="Une question, une remarque ? Contactez-nous.">
<meta name="description" content="Une question, une remarque ? Contactez-nous.">

<main>
    <h2 class="h2_sous_nav">Nous contacter</h2>
    <p class="texte_contact">
        Une question, une demande particulière ? <br><br>
        Remplissez le formulaire ci-dessous.
    </p>

    <?php $Actualites->envoyerMessage(); ?>

</main>

<?php require 'require/footer.php';?>