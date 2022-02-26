<?php

namespace App\Controller;

use App\Model\ActualitesModel;

// Controller de la classe Actualites
class ControllerActualites
{
    private $model;

    public function __construct()
    {
        $this->model = new ActualitesModel();
    }

    // Affiche un article.
    public function findOne(){
        $id = htmlspecialchars($_GET['id']);
        $article=$this->model->findOne($id);

        require('App/View/getUnArticle.php');
    }

    // Affiche l'ensemble des articles.
    public function findListe(){
        $listeArticle=$this->model->findAll();

        require('App/View/getListeArticles.php');
    }

    // Affiche les derniers articles(ici 3).
    public function findDerniers(){
        $derniersArticles=$this->model->findDerniers();

        require ('App/View/getDerniersArticles.php');
    }



    // Affiche l'ensemble des articles dans la section Admin.
    public function findListeAdmin(){
        $listeArticleAdmin=$this->model->findAll();
        require('../App/View/getListeArticlesAdmin.php');
    }

    // Ajouter un nouvel article (depuis l'espace Admin).
    public function ajouterArticle(){
        // Informations du transfert d'image
        $enregistrement=false;
        $info_transfert="";

        // Conditions d'exécution
        if(isset($_POST['send'])){
            if (!(empty($_POST['titre']) && empty($_POST['date_parution']) && empty($_POST['texte']) && empty($_POST['auteur']))) {

                //Données de l'ajout.
                $titre = htmlspecialchars($_POST['titre']);
                $date_parution = htmlspecialchars($_POST['date_parution']);
                $texte = htmlspecialchars($_POST['texte']);
                $video = htmlspecialchars($_POST['video']);
                $auteur = htmlspecialchars($_POST['auteur']);

                // Informations de transfert de l'image associée à l'article.
                $enregistrement = move_uploaded_file($_FILES["img_couverture"]["tmp_name"], "../img/article/" . $_FILES["img_couverture"]["name"]);
                $img_couverture = "img/article/" . $_FILES["img_couverture"]["name"];

                $uploads_dir = '../img/article/';
                foreach ($_FILES["img_article"]["error"] as $key => $error) {
                    if ($error == UPLOAD_ERR_OK) {
                        $tmp_name = $_FILES["img_article"]["tmp_name"][$key];
                        // basename() pour empêcher les attaques de système de fichiers.
                        $name = basename($_FILES["img_article"]["name"][$key]);
                        move_uploaded_file($tmp_name, "$uploads_dir/$name");
                    }
                }

                // Variables de la requête d'ajout de la programmation.
                $data = "Actualites (titre, date_parution, texte, img_couverture, video, auteur) 
                                        VALUES ('$titre', '$date_parution', '$texte', '$img_couverture', '$video', '$auteur')";
                $ajouterProgrammation=$this->model->insert($data);

                $message_systeme = "Article ajouté au site.";
            }
        }
        require ('../App/View/getAddArticle.php');
    }

    // Modifier d'un article existant.
    public function modifierArticle(){
        $id = htmlspecialchars($_GET['id']);
        $article=$this->model->findOne($id);

        if(isset($_POST['send'])){
            //Données de la modification
            $titre = htmlspecialchars($_POST['titre']);
            $date_parution = htmlspecialchars($_POST['date_parution']);
            $texte = htmlspecialchars($_POST['texte']);
            $video = htmlspecialchars($_POST['video']);
            $auteur = htmlspecialchars($_POST['auteur']);

            // Variables de la requête de modification de l'article.
            $data = "titre='$titre', date_parution='$date_parution', texte='$texte', video='$video', auteur='$auteur'";
            $modifierArticle=$this->model->update($data, $id);

            header('location: modifier-article');
        }
        require ('../App/View/getModifArticle.php');
    }

    // Archiver un article.
    public function archiverArticle(){
        if(isset($_POST['send'])){
            $id = htmlspecialchars($_GET['id']);

            // Variables de la requête de copie des données d'un article.
            // Copie des données dans la table "archive-programmation'.
            $data1 = "Archives_actualites (id, titre, date_parution, texte, img_couverture, video, auteur)";
            $data2 = "id, titre, date_parution, texte, img_couverture, video, auteur FROM Actualites";
            $ajouterArticle=$this->model->transfert($data1, $data2, $id);

            //Suppression des données dans la table "programmation".
            $supprimerArticle=$this->model->delete($id);

            $message_systeme = "Article archivé.";
            header('location: modifier-article');
        }
        $article=$_GET['id'];
        require('../App/View/getArchiverArticle.php');
    }



    // Permet à l'utilisateur de contacter KROM à travers le formulaire
    public function envoyerMessage(){
        if(isset($_POST['send'])){
            if (!(empty($_POST['mail']) && empty($_POST['message']))) {
                // Données du formulaire
                $mail = htmlspecialchars($_POST['mail']);
                $message = htmlspecialchars($_POST['message']);

                $destinataire = 'contact@krom-esport.fr';
                $expediteur = $mail;
                $sujet = "Nouveau message d'un utilisateur depuis le site KROM.";
                $message = $message;
                $entete = 'From: '.$expediteur. "\r\n" . 'Reply-To: '.$expediteur. "\r\n" . 'X-Mailer: PHP/' . phpversion();

                $sujet1 = "Confirmation de l'envoi de votre message depuis le site KROM Esport.";

                // Fonction d'envoi du message à KROM
                mail($destinataire, $sujet, $message, $entete);
                // Fonction d'envoi du message à l'utilisateur (confirmation d'envoi)
                mail($mail, $sujet1, $message, $entete);

                $message_systeme = "Votre messsage a bien été envoyé. <br> Nous vous recontacterons très bientôt.";
            }
        }
        require ('App/View/getEnvoyerUnMessage.php');
    }
}