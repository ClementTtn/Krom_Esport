<?php
function tronquer_texte($texte, $longeur_max = 80){

    if (strlen($texte) > $longeur_max){

        $texte = substr($texte, 0, $longeur_max);
        $texte .= "...";
    }

    return $texte;
}
?>

<h2 class="h2_sous_nav">Nos dernières actualités compétition</h2>

<?php foreach($listeArticle_competition as $unArticle) : ?>

    <div class="collec_article">
        <a class="titre_article"><?=$unArticle['titre']?></a>
        <br>
        <a href="krom_competition.php?id=<?=$unArticle['id']?>">
            <img src=<?=$unArticle['img_article']?> alt="article_KROM" width="716" height="403">
        </a>
        <br>
        <a class="article_extrait"><?=tronquer_texte($unArticle['texte'])?></a>
        <br>
        <div class="redirection_vue_article">
            <a href="krom_competition.php?id=<?=$unArticle['id']?>">En savoir plus</a>
        </div>
        <br>
        <a class="date_prog"><?=date("d/m/Y", strtotime($unArticle['date_parution']));?></a>
    </div>

<?php endforeach;?>

<h3 class="h3_prog">Suite prochainement...</h3>