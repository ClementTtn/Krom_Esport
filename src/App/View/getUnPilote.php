<!-- Affichage d'un pilote / membre de la direction -->

<div class="detail_pilote">

    <div class="photo_pilote">
        <img src=<?=$pilote['img']?> alt="membre_krom">
        <p class="nom_pilote"><?=$pilote['nom']?></p>
        <p class="role_pilote"><?=$pilote['role']?></p>
        <p class="age_pilote"><?=$pilote['age']?> ans, <?=$pilote['ville']?></p>
    </div>

    <div class="fiche_pilote">
        <p class="texte_pilote"><?=$pilote['circuit']?></p>

        <p class="texte_pilote"><?=$pilote['voiture']?></p>

        <p class="texte_pilote"><?=$pilote['palmares']?></p>

        <p class="reseaux_pilotes"><?=htmlspecialchars_decode($pilote['lien'])?></p>
    </div>

</div>

<a class="redirection_liste_equipe" href="equipe">← Retourner à la liste</a>

<meta property="og:site_name" content="KROM Esport">
<meta property="og:image" content="https://krom-esport.fr/img/logos/krom_logo.png">
<meta property="og:title" content="L'équipe KROM Esport">
<meta property="og:description" content="Découvrez-en un peu plus sur <?=$pilote['nom']?>.">
<meta name="description" content="Découvrez-en un peu plus sur <?=$pilote['nom']?>.">