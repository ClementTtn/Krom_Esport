<h2 class="h2_sous_nav">Calendrier publié</h2>

<div class="calendrier">

    <!-- Boucle d'affichage d'une date -->
    <?php foreach($listeCalendrierAdmin as $unCalendrier) : ?>
        <div class="un_calendrier_admin">
            <div class="date_calendrier">
                <a><?=date("d/m/Y", strtotime($unCalendrier['date']));?> <?=$unCalendrier['heure']?></a>
            </div>

            <div class="intitule_calendrier">
                <a href="<?=$unCalendrier['lien_evenement']?>" target="_blank"><?=$unCalendrier['intitule']?></a>
            </div>

            <div>
                <div class="redirection_vue_article">
                    <a href="modifier-calendrier?id=<?=$unCalendrier['id']?>">Modifier</a>
                </div>

                <div class="redirection_vue_article">
                    <a href="archiver-calendrier?id=<?=$unCalendrier['id']?>">Archiver</a>
                </div>
            </div>

        </div>

        <a class="separation_calendrier"></a>
    <?php endforeach;?>
</div>

<div class="a_admin">
    <h3><a href="index">Acceuil administration</a></h3>
</div>