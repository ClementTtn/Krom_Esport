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


require 'header_index.php';
?>

    <div class="quelques_chiffres_global">
        <h2>Quelques chiffres</h2>
        <ul class="quelques_chiffres">
            <li><a>Création en <a class="chiffres_couleur">octobre 2020</a></a></li>

            <a class="barre_chiffres"></a>

            <li><a><a class="chiffres_couleur">19</a> pilotes</a></li>

            <a class="barre_chiffres"></a>

            <li><a>Plus de <a class="chiffres_couleur">160</a> départs</a></li>

            <a class="barre_chiffres"></a>

            <li><a><a class="chiffres_couleur">15</a> victoires</a></li>

            <a class="barre_chiffres"></a>

            <li><a><a class="chiffres_couleur">37</a> podiums</a></li>

            <a class="barre_chiffres"></a>

            <li><a><a class="chiffres_couleur">107</a> top 10</a></li>

            <a class="detail_chiffres">(en janvier 2022)</a>
        </ul>

        <a class="texte_chiffres">Et ce n'est que le début de notre longue histoire....</a>
    </div>

    <a class="separation_footer"></a>

    <main>
        <?php $Actualites->findDerniers(); ?>
    </main>


<?php require 'footer.php'?>