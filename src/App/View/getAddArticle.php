<?php if(isset($_SESSION['id_admin'])) : ?>

    <main>
        <h2 class="h2_sous_nav_admin">Ajout d'un article</h2>
        <div class="formulaire_admin">
            <div class="formulaire">
                <form id="formulaire" enctype="multipart/form-data" method="post" action="ajout_article.php">
                    <p>
                        <label for="titre">Titre</label>
                        <input type="text" id="titre" name="titre" required/>
                    </p>

                    <p>
                        <label for="date_parution">Date de parution</label>
                        <input type="date" id="date_parution" name="date_parution" required/>
                    </p>

                    <p>
                        <label for="texte">Texte :</label>
                        <textarea id="texte" name="texte" required> </textarea>
                    </p>

                    <p>
                        <label for="img_article">Images :</label>
                        <input type="file" id="file" name="file[]" accept="image/png" multiple required/>
                    </p>

                    <p>
                        <label for="video">Vidéo : </label>
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

                <?php
                if(isset($_POST['send']))
                    foreach ($_FILES['file']['name'] as $filename) {
                        echo $filename.'<br/>';
                    }
                ?>

                <?php if(isset($message_systeme)) : ?>
                    <a class="message_systeme"><?=$message_systeme?></a>
                <?php endif ; ?>
            </div>
        </div>
    </main>

    <div class="a_admin">
        <h3><a href="index.php">Acceuil administration</a></h3>
    </div>

    </body>

<?php else : ?>
    <?php header('location: login.php'); ?>
<?php endif ; ?>