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

<h2>Les derniers articles de Krom Esport</h2>

<!-- Boucle d'affichage d'un article -->
<?php foreach($derniersArticles as $unArticle) : ?>

    <div class="collec_article_index">
        <a class="titre_article"><?=$unArticle['titre']?></a>
        <br>
        <a href="actualites?id=<?=$unArticle['id']?>">
            <img src=<?=$unArticle['img_couverture']?> alt="article_KROM" width="716" height="403" loading="lazy">
        </a>
        <br>
        <a class="article_extrait"><?=tronquer_texte($unArticle['texte'])?></a>
        <br>
        <div class="redirection_vue_article">
            <a href="actualites?id=<?=$unArticle['id']?>">En savoir plus</a>
        </div>
        <br>
        <a class="date_article_index"><?=date("d/m/Y", strtotime($unArticle['date_parution']));?></a>
    </div>

<?php endforeach;?>

<div class="bouton_actu">
    <a href="actualites">Toutes nos actualités</a>
</div>