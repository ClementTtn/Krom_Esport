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

<h2 class="h2_sous_nav">Articles publiés</h2>

<div class="liste_articles">

    <!-- Boucle d'affichage d'un article -->
    <?php foreach($listeArticleAdmin as $unArticle) : ?>
        <div class="collec_article">
            <a class="titre_article"><?=$unArticle['titre']?></a>
            <br>
            <img src="../<?=$unArticle['img_couverture']?>" alt="article_KROM" width="716" height="403" loading="lazy">
            <br>
            <a class="article_extrait"><?=htmlspecialchars_decode(tronquer_texte($unArticle['texte']))?></a>
            <br>
            <div class="redirection_vue_article">
                <a href="modifier-article?id=<?=$unArticle['id']?>">Modifier</a>
            </div>

            <div class="redirection_vue_article">
                <a href="archiver-article?id=<?=$unArticle['id']?>">Archiver</a>
            </div>
            <br>

            <a class="date_article"><?=date("d/m/Y", strtotime($unArticle['date_parution']));?></a>
        </div>

    <?php endforeach;?>

</div>

<div class="a_admin">
    <h3><a href="index">Acceuil administration</a></h3>
</div>