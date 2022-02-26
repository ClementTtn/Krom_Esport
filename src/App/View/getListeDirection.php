<h2 class="h2_sous_nav">Direction</h2>

<div class="equipe_flex">

    <!-- Boucle d'affichage d'un membre de la direction -->
    <?php foreach($listeEquipeDirection as $unePersonne) : ?>

        <div class="collec_membres">
            <a href="equipe?id_staff=<?=$unePersonne['id']?>">
                <img src=<?=$unePersonne['img']?> alt="membre_krom">
            </a>
            <br>
            <a class="nom_membres"><?=$unePersonne['nom']?></a>
        </div>

    <?php endforeach;?>
</div>
