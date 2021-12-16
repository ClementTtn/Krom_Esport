<?php

include ('../connexion.php');
$connexion=connexionBd();

if(isset($_POST["send"])) {

    //Formulaire
    if (!(empty($_POST['titre']) && empty($_POST['date_parution']) && empty($_POST['sous_titre']) && empty($_POST['texte']) && empty($_FILES)) && $_FILES['img_article']['error'] == 0 && $_FILES['img_texte_1']['error'] == 0 && $_FILES['img_texte_2']['error'] == 0 && $_FILES['img_texte_3']['error'] == 0 && $_FILES['img_texte_4']['error'] == 0 && empty($_POST['video']) && empty($_POST['auteur'])){
        $titre = htmlspecialchars($_POST['titre']);
        $date_parution = htmlspecialchars($_POST['date_parution']);
        $sous_titre = htmlspecialchars($_POST['sous_titre']);
        $texte = htmlspecialchars($_POST['texte']);

        //Image article
        $img_article = "../img/article/" . $_FILES["img_article"]["name"];
        $img_texte_1 = "../img/article/" . $_FILES["img_texte_1"]["name"];
        $img_texte_2 = "../img/article/" . $_FILES["img_texte_2"]["name"];
        $img_texte_3 = "../img/article/" . $_FILES["img_texte_3"]["name"];
        $img_texte_4 = "../img/article/" . $_FILES["img_texte_4"]["name"];

        $video = htmlspecialchars($_POST(['video']));
        $video = htmlspecialchars($_POST(['auteur']));

        //Insertion des données du formulaire dans la table "article".
        $req_insertion_article = "INSERT INTO actualites (titre, date_parution, sous_titre, texte, img_article, img_texte_1, img_texte_2, img_texte_3, img_texte_4, video, auteur) 
                            VALUES (:titre, :date_parution, :sous_titre, :texte, :img_article, :img_texte_1, :img_texte_2, :img_texte_3, :img_texte_4, :video, :auteur);";


        $req_insertion_article = $connexion->prepare($req_insertion_article);
        $req_insertion_article->bindParam(':titre', $titre);
        $req_insertion_article->bindParam(':date_parution', $date_parution);
        $req_insertion_article->bindParam(':sous_titre', $sous_titre);
        $req_insertion_article->bindParam(':texte', $texte);
        $req_insertion_article->bindParam(':img_article', $img_article);
        $req_insertion_article->bindParam(':img_texte_1', $img_texte_1);
        $req_insertion_article->bindParam(':img_texte_2', $img_texte_2);
        $req_insertion_article->bindParam(':img_texte_3', $img_texte_3);
        $req_insertion_article->bindParam(':img_texte_4', $img_texte_4);
        $req_insertion_article->bindParam(':video', $video);
        $req_insertion_article->bindParam(':auteur', $auteur);

        //Exécution de l'insertion
        $req_insertion_article->execute();

        $message_systeme = "Article publié sur le site.";
    }

}

require 'header_admin.php';
?>

<main>
    <h2 class="h2_sous_nav">Ajout d'un article sur Krom Esport</h2>
    <div class="formulaire">
        <form id="formulaire" enctype="multipart/form-data" method="post" action="ajout_article.php">
            <p>
                <label for="titre_article">Titre :</label>
                <input type="text" id="titre_article" name="titre_article" required/>
            </p>

            <p>
                <label for="date_parution">Date de parution :</label>
                <input type="date" id="date_parution" name="date_parution" required/>
            </p>

            <p>
                <label for="sous_titre">Sous-titre :</label>
                <input type="text" id="sous_titre" name="sous_titre" required/>
            </p>

            <p>
                <label for="texte_article">Texte :</label>
                <textarea id="texte_article" name="texte_article" rows="20" cols="50"></textarea>
            </p>

            <p>
                <label for="img_article">Image de couverture :</label>
                <input type="file" id="img_article" name="img_article" required/>
            </p>

            <p>
                <label for="img_texte_1">Image de texte n°1 :</label>
                <input type="file" id="img_texte_1" name="img_texte_1"/>
            </p>

            <p>
                <label for="img_texte_2">Image de texte n°2 :</label>
                <input type="file" id="img_texte_2" name="img_texte_2"/>
            </p>

            <p>
                <label for="img_texte_3">Image de texte n°3 :</label>
                <input type="file" id="img_texte_3" name="img_texte_3"/>
            </p>

            <p>
                <label for="img_texte_4">Image de texte n°4 :</label>
                <input type="file" id="img_texte_4" name="img_texte_4"/>
            </p>

            <p>
                <label for="video">Incrustation de la vidéo :</label>
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

        <?php if(isset($message_systeme)) : ?>
            <a><?=$message_systeme?></a>
        <?php endif ; ?>
    </div>
</main>



<!-- Lien vers index.php -->
<div class="a_admin">
    <h3><a href="index.php">Acceuil administration</a></h3>
</div>

</body>
