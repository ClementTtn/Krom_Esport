<main>
    <h2 class="h2_sous_nav_admin">Modification d'un article</h2>

    <!-- Confirmation de la modification -->
    <?php if(isset($message_systeme)) : ?>
        <a class="message_systeme"><?=$message_systeme?></a>
    <?php endif ; ?>

    <div class="formulaire_admin">
        <div class="formulaire">

            <!-- Formulaire de modification -->
            <!-- action -> $article['id] = récupère l'id de l'article pour exécuter le formulaire -->
            <!-- value = récupère les informations déjà existantes -->
            <form id="formulaire" enctype="multipart/form-data" method="post" action="modifier-article?id=<?=$article['id']?>">
                <p>
                    <label for="titre">Titre :</label><br>
                    <input type="text" id="titre" name="titre" value='<?=$article['titre']?>'/>
                </p>

                <p>
                    <label for="date_parution">Date de parution :</label>
                    <input type="date" id="date_parution" name="date_parution" value='<?=$article['date_parution']?>'/>
                </p>

                <p>
                    <label for="texte">Texte :</label><br>
                    <textarea id="texte" name="texte"><?=$article['texte']?></textarea>
                </p>

                <p>
                    <label for="video">Vidéo : </label>
                    <input type="text" id="video" name="video" value='<?=$article['video']?>'/>
                </p>

                <p>
                    <label for="auteur">Auteur :</label>
                    <input type="text" id="auteur" name="auteur" value='<?=$article['auteur']?>'/>
                </p>

                <p class="bouton">
                    <input type="submit" value="Modifier" name="send"/>
                </p>
            </form>
        </div>
    </div>
</main>

<div class="a_admin">
    <h3><a href="modifier-article">Retour</a></h3>
</div>

</body>