<main>
    <h2 class="h2_sous_nav_admin">Ajout d'une date au calendrier</h2>

    <!-- Message de confirmation de l'ajout -->
    <?php if(isset($message_systeme)) : ?>
        <a class="message_systeme"><?=$message_systeme?></a>
    <?php endif ; ?>

    <!-- Formulaire d'ajout -->
    <div class="formulaire_admin">
        <div class="formulaire">
            <form id="formulaire" enctype="multipart/form-data" method="post" action="ajout-calendrier">

                <p>
                    <label for="date">Date :</label> <br>
                    <input type="date" id="date" name="date" required/>
                </p>

                <p>
                    <label for="heure">Heure :</label><br>
                    <input id="texte" name="heure" placeholder="Exemple : à 20h30"/>
                </p>

                <p>
                    <label for="intitule">Intitulé : </label>
                    <input type="text" id="intitule" name="intitule" required/>
                </p>

                <p>
                    <label for="lien_evenement">Lien de l'événement :</label>
                    <input type="text" id="lien_evenement" name="lien_evenement"/>
                </p>

                <p class="bouton">
                    <input type="submit" value="Ajouter" name="send"/>
                </p>
            </form>
        </div>
    </div>
</main>

<div class="a_admin">
    <h3><a href="index">Acceuil administration</a></h3>
</div>

</body>