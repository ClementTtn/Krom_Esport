<h2 class="h2_sous_nav">Les derniers articles de Krom Esport</h2>

<?php foreach($derniersArticles as $unArticle) : ?>

    <div class="collec_img_concert">
        <a href="actualites.php?article=<?=$unArticle['id']?>">
            <img src=<?=$unArticle['img_article']?> alt="article_01" width="716" height="403">
        </a>
        <a class="artiste_prog"><?=$unArticle['titre']?></a>
        <br>
        <a class="artiste_prog"><?=$unArticle['sous_titre']?></a>
        <br>
        <a class="date_prog"><?=date("d/m/Y", strtotime($unArticle['date_parution']));?></a>
        <div class="redirection_vue_artiste">
            <a href="actualites.php?id=<?=$unArticle['id']?>">En savoir plus</a>
        </div>
    </div>

<?php endforeach;?>

<div class="bouton_prog">
    <a href="actualites.php">Toutes nos actualités</a>
</div>