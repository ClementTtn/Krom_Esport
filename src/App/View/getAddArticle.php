<main>
    <h2 class="h2_sous_nav_admin">Ajout d'un article</h2>

    <!-- Message de confirmation de l'ajout -->
    <?php if(isset($message_systeme)) : ?>
        <a class="message_systeme"><?=$message_systeme?></a>
    <?php endif ; ?>

    <!-- Formulaire d'ajout -->
    <div class="formulaire_admin">
        <div class="formulaire">
            <form id="formulaire" enctype="multipart/form-data" method="post" action="ajout-article">
                <p>
                    <label for="titre">Titre :</label><br>
                    <input type="text" id="titre" name="titre" required/>
                </p>

                <p>
                    <label for="date_parution">Date de parution :</label>
                    <input type="date" id="date_parution" name="date_parution" required/>
                </p>

                <p>
                    <label for="texte">Texte :</label><br>
                    <textarea id="texte" name="texte" required> </textarea>
                </p>

                <p>
                    <label for="img_couverture">Image de la couverture :</label>
                    <input type="file" id="img_couverture" name="img_couverture" accept="image/png" required/>
                </p>

                <p>
                    <label for="img_article">Images :</label>
                    <input type="file" id="img_article" name="img_article[]" accept="image/png" multiple/>
                </p>

                <p>
                    <label for="video">Vidéo : </label><br>
                    <input type="text" id="video" name="video"/>
                </p>

                <p>
                    <label for="auteur">Auteur :</label>
                    <input type="text" id="auteur" name="auteur" required/>
                </p>

                <p class="bouton">
                    <input type="submit" value="Publier" name="send"/>
                </p>
            </form>
        </div>
    </div>
</main>

<div class="a_admin">
    <h3><a href="index">Acceuil administration</a></h3>
</div>

</body>