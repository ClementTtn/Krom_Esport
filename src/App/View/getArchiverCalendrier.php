<main>
    <h2 class="h2_sous_nav_admin">Êtes-vous sûr de vouloir archiver cette date ?</h2>

    <div class="formulaire_admin">
        <div class="formulaire">

            <!-- Formulaire d'archivage -->
            <form action="archiver-calendrier?id=<?=$calendrier?>" method="post">
                <fieldset>
                    <input type='number' name='id_calendrier' value='<?=$calendrier?>' hidden required>
                </fieldset>

                <p class="bouton">
                    <input type="submit" value="Archiver" name="send"/>
                </p>

                <!-- Confirmation de l'archivage -->
                <?php if(isset($message_systeme)) : ?>
                    <a class="message_systeme"><?=$message_systeme?></a>
                <?php endif ; ?>
            </form>
        </div>
    </div>
</main>

<div class="a_admin">
    <h3><a href="modifier-calendrier">Retour</a></h3>
</div>

</body>