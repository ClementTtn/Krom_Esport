<?php foreach($listeEquipeDirection as $unePersonne) : ?>

    <div class="collec_img_concert">
        <img src=<?=$unePersonne['img']?> alt="personne_01" width="304" height="376">
        <br>
        <a class="artiste_prog"><?=$unePersonne['nom']?></a>
    </div>

<?php endforeach;?>