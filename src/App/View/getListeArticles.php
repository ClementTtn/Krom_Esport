<h2 class="h2_sous_nav">Nos dernières actualités</h2>

<?php foreach($listeArticle as $unArticle) : ?>

    <div class="collec_img_concert">
        <a class="artiste_prog"><?=$unArticle['titre']?></a>
        <br>
        <a href="actualites.php?id=<?=$unArticle['id']?>">
            <img src=<?=$unArticle['img_article']?> alt="prog_01" width="716" height="403">
        </a>
        <br>
        <a class="artiste_prog"><?=$unArticle['sous_titre']?></a>
        <br>
        <a class="date_prog"><?=date("d/m/Y", strtotime($unArticle['date_parution']));?></a>
        <div class="redirection_vue_artiste">
            <a href="actualites.php?id=<?=$unArticle['id']?>">En savoir plus</a>
        </div>
    </div>

<?php endforeach;?>

<h3 class="h3_prog">Suite prochainement...</h3>