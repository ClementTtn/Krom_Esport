<h2 class="h2_sous_nav">Nos prochains rendez-vous</h2>

<div class="calendrier">

    <!-- Boucle d'affichage d'une date -->
    <?php foreach($listeCalendrier as $unCalendrier) : ?>
    <div class="un_calendrier">
        <div class="date_calendrier">
            <a><?=date("d/m/Y", strtotime($unCalendrier['date']));?> <?=$unCalendrier['heure']?></a>
        </div>

        <div class="intitule_calendrier">
            <a href="<?=$unCalendrier['lien_evenement']?>" target="_blank"><?=$unCalendrier['intitule']?></a>
        </div>

    </div>

    <a class="separation_calendrier"></a>
    <?php endforeach;?>
</div>

<h3 class="h3_actu">La suite prochainement...</h3>
