<?php foreach($listeEquipeDirection as $unePersonne) : ?>

    <div class="collec_membres">
        <a href="<?=$unePersonne['lien']?>">
            <img src=<?=$unePersonne['img']?> alt="personne_krom" width="304" height="376">
        </a>
        <br>
        <a class="nom_membres"><?=$unePersonne['nom']?></a>
    </div>

<?php endforeach;?>