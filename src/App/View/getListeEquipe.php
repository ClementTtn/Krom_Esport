<h2>Pilotes</h2>

<div class="equipe_flex">

    <!-- Boucle d'affichage d'un pilote -->
    <?php foreach($listeEquipeDirection as $unePersonne) : ?>

        <div class="collec_membres">
            <a href="equipe?id_pilote=<?=$unePersonne['id']?>">
                <img src=<?=$unePersonne['img']?> alt="membre_krom">
            </a>
            <br>
            <a class="nom_membres"><?=$unePersonne['nom']?></a>
        </div>

    <?php endforeach;?>
</div>

<meta property="og:site_name" content="KROM Esport">
<meta property="og:image" content="https://krom-esport.fr/img/logos/krom_logo.png">
<meta property="og:title" content="L'équipe KROM Esport">
<meta property="og:description" content="Jetez un oeil à la liste de nos pilotes.">
<meta name="description" content="Jetez un oeil à la liste de nos pilotes.">