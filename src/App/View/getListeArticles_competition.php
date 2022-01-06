<h2 class="h2_sous_nav">Nos dernières actualités compétition</h2>

<?php foreach($listeArticle_competition as $unArticle) : ?>

    <div class="collec_img_concert">
        <a class="artiste_prog"><?=$unArticle['titre']?></a>
        <br>
        <a href="krom_competition.php?id=<?=$unArticle['id']?>">
            <img src=<?=$unArticle['img_article']?> alt="prog_01" width="716" height="403">
        </a>
        <br>
        <a class="date_prog"><?=date("d/m/Y", strtotime($unArticle['date_parution']));?></a>
        <div class="redirection_vue_artiste">
            <a href="krom_competition.php?id=<?=$unArticle['id']?>">En savoir plus</a>
        </div>
    </div>

<?php endforeach;?>

<h3 class="h3_prog">Suite prochainement...</h3>