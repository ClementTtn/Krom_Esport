<?php

namespace App\Controller;

use App\Model\ActualitesModel;

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

    // Affiche tous les articles.
    public function findListe(){
        $listeArticle=$this->model->findAll();

        require('App/View/getListeArticles.php');
    }

    // Affiche les derniers articles.
    public function findDerniers(){
        $derniersArticles=$this->model->findDerniers();

        require ('App/View/getDerniersArticles.php');
    }


    // Ajoute un nouvel article (depuis l'espace "Admin").
    public function ajouterArticle(){
        // Informations du transfert d'image
        $enregistrement=false;
        $info_transfert="";

        if(isset($_POST['send'])){
            if (!(empty($_POST['titre']) && empty($_POST['date_parution']) && empty($_POST['texte']) && empty($_POST['auteur']) && empty($_FILES))) {

                //Données de l'ajout.
                $titre = htmlspecialchars($_POST['titre']);
                $date_parution = htmlspecialchars($_POST['date_parution']);
                $texte = htmlspecialchars($_POST['texte']);
                $video = htmlspecialchars($_POST['video']);
                $auteur = htmlspecialchars($_POST['auteur']);

                // Informations de transfert de l'image associée à la programmation.
                $enregistrement = move_uploaded_file($_FILES["img_article"]["tmp_name"], "../img/article/" . $_FILES["img_article"]["name"]);
                //$info_transfert .= "Le fichier a bien été transféré sous le nom: " . $_FILES["img_article"]["name"];
                $img_article = "img/article/" . $_FILES["img_article"]["name"];

                // Insertion de la programmation.
                $data = "Actualites (titre, date_parution, texte, video, auteur) 
                                        VALUES ('$titre', '$date_parution', '$texte', '$video', '$auteur')";
                $ajouterProgrammation=$this->model->insert($data);

                $message_systeme = "Article ajouté au site.";
            }
        }
        require ('../App/View/getAddArticle.php');
    }

    // Archive une programmation quand elle est passée.
    public function archiverProgrammation(){
        if(isset($_POST['send'])){
            if (!(empty($_POST['nom_artiste']))) {
                $nom_artiste = htmlspecialchars($_POST['nom_artiste']);

                // Copie des données dans la table "archive-programmation'.
                $data1 = "archive_programmation (id, nom_artiste, date_programmation, description, img_artiste, tarif)";
                $data2 = "id, nom_artiste, date_programmation, description, img_artiste, tarif FROM programmation";
                $ajouterProgrammation=$this->model->transfert($data1, $data2, $nom_artiste);

                //Suppression des données dans la table "programmation".
                $supprimerProgrammation=$this->model->deleteProg($nom_artiste);

                header('Location: index.php');
            }
        }
        require('../App/View/getArchiverProgrammation.php');
    }



    // Permet à l'utilisateur de contacter KROM
    public function envoyerMessage(){
        if(isset($_POST['send'])){
            if (!(empty($_POST['mail']) && empty($_POST['message']))) {
                //Données de l'ajout.
                $mail = htmlspecialchars($_POST['mail']);
                $message = htmlspecialchars($_POST['message']);

                $destinataire = 'krom.esport@gmail.com';
                $expediteur = $mail;
                $sujet = "Nouveau message d'un utilisateur depuis le site KROM.";
                $message = $message
                ;
                $entete = 'From: '.$expediteur. "\r\n" . 'Reply-To: '.$expediteur. "\r\n" . 'X-Mailer: PHP/' . phpversion();
                mail($destinataire, $sujet, $message, $entete);

                $message_systeme = "Votre messsage a bien été envoyé. <br> Nous vous recontacterons très bientôt.";
            }
        }
        require ('App/View/getEnvoyerUnMessage.php');
    }
}