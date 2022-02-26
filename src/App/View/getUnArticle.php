<?php
// Fonction qui tronque le texte en ne gardant que les 80 premiers caractères
function tronquer_texte($texte, $longeur_max = 80){

    if (strlen($texte) > $longeur_max){

        $texte = substr($texte, 0, $longeur_max);
        $texte .= "...";
    }

    return $texte;
}
?>

<!-- Affichage d'un article -->

<div class="article_complet">
    <h2 class="titre_article_complet"><?=$article['titre']?></h2>
    <p class="auteur_article">Par <?=$article['auteur']?> , le <?=date("d/m/Y", strtotime($article['date_parution']));?>.</p>
    <p class="texte_article"><?=htmlspecialchars_decode($article['texte'])?></p>
    <p><?=$article['video']?></p>

    <a class="redirection_liste_article" href="actualites">← Retourner à la liste</a>
</div>

<meta property="og:site_name" content="KROM Esport">
<meta property="og:title" content="<?=$article['titre']?>">
<meta property="og:description" content="<?=tronquer_texte($article['texte'])?>">
<meta name="description" content="<?=tronquer_texte($article['texte'])?>">
<meta property="og:image" content="https://krom-esport.fr/<?=$article['img_couverture']?>">
<meta property="og:image:width" content="1920">
<meta property="og:image:height" content="1080">