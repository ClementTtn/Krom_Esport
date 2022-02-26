<?php
// Fonction qui tronque le texte en ne gardant que les 60 premiers caractères
function tronquer_texte($texte, $longeur_max = 60){

    if (strlen($texte) > $longeur_max){

        $texte = substr($texte, 0, $longeur_max);
        $texte .= "...";
    }

    return $texte;
}
?>

<h2 class="h2_sous_nav">Nos dernières actualités</h2>

<div class="liste_articles">

    <!-- Boucle d'affichage d'un article -->
    <?php foreach($listeArticle as $unArticle) : ?>
            <div class="collec_article">
                <a class="titre_article"><?=$unArticle['titre']?></a>
                <br>
                <a href="actualites?id=<?=$unArticle['id']?>">
                    <img src=<?=$unArticle['img_couverture']?> alt="article_KROM" width="716" height="403" loading="lazy">
                </a>
                <br>
                <a class="article_extrait"><?=htmlspecialchars_decode(tronquer_texte($unArticle['texte']))?></a>
                <br>
                <div class="redirection_vue_article">
                    <a href="actualites?id=<?=$unArticle['id']?>">En savoir plus</a>
                </div>
                <br>
                <a class="date_article"><?=date("d/m/Y", strtotime($unArticle['date_parution']));?></a>
            </div>

    <?php endforeach;?>

</div>

<h3 class="h3_actu">Suite prochainement...</h3>

<meta property="og:site_name" content="KROM Esport">
<meta property="og:image" content="https://krom-esport.fr/img/logos/krom_logo.png">
<meta property="og:title" content="Les actualités de KROM Esport">
<meta property="og:description" content="Jetez un oeil à nos actualités.">
<meta name="description" content="Jetez un oeil à nos actualités.">