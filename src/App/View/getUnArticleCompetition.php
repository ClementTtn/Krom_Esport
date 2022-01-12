<div class="article_complet">
    <h2 class="titre_article_complet"><?=$article['titre']?></h2>
    <p class="auteur_article">Par <?=$article['auteur']?> , le <?=date("d/m/Y", strtotime($article['date_parution']));?>.</p>
    <p class="texte_article"><?=$article['texte']?></p>
    <p><?=$article['video']?></p>

    <a class="redirection_liste_article" href="krom_competition.php">← Retourner à la liste</a>
</div>