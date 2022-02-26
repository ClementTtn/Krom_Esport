<div class="equipe_flex">
    <?php foreach($listeEquipeDirection as $unePersonne) : ?>

        <div class="collec_membres">
            <a href="<?=$unePersonne['lien']?>" target="_blank">
                <img src=<?=$unePersonne['img']?> alt="personne_krom">
            </a>
            <br>
            <a class="nom_membres"><?=$unePersonne['nom']?></a>
        </div>

    <?php endforeach;?>
</div>
