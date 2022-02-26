<main>
    <h2 class="h2_sous_nav_admin">Modification d'une date</h2>

    <!-- Confirmation de la modification -->
    <?php if(isset($message_systeme)) : ?>
        <a class="message_systeme"><?=$message_systeme?></a>
    <?php endif ; ?>

    <div class="formulaire_admin">
        <div class="formulaire">

            <!-- Formulaire de modification -->
            <!-- action -> $article['id] = récupère l'id de l'article pour exécuter le formulaire -->
            <!-- value = récupère les informations déjà existantes -->
            <form id="formulaire" enctype="multipart/form-data" method="post" action="modifier-calendrier?id=<?=$calendrier['id']?>">

                <p>
                    <label for="date">Date :</label> <br>
                    <input type="date" id="date" name="date" value='<?=$calendrier['date']?>' required/>
                </p>

                <p>
                    <label for="heure">Heure :</label><br>
                    <input id="texte" name="heure" value='<?=$calendrier['heure']?>' placeholder="Exemple : à 20h30"/>
                </p>

                <p>
                    <label for="intitule">Intitulé : </label>
                    <input type="text" id="intitule" name="intitule" value='<?=$calendrier['intitule']?>' required/>
                </p>

                <p>
                    <label for="lien_evenement">Lien de l'événement :</label>
                    <input type="text" id="lien_evenement" name="lien_evenement" value='<?=$calendrier['lien_evenement']?>'/>
                </p>

                <p class="bouton">
                    <input type="submit" value="Ajouter" name="send"/>
                </p>
            </form>
        </div>
    </div>
</main>

<div class="a_admin">
    <h3><a href="modifier-calendrier">Retour</a></h3>
</div>

</body>