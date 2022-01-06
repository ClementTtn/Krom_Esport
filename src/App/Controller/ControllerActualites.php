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

    // Affiche le dernier article.
    public function findDernier(){
        $derniereProgrammation=$this->model->findDernier();

        require ('App/View/getDerniereProgrammation.php');
    }


    // Ajoute un nouvel article (depuis l'espace "Admin").
    public function ajouterArticle(){
        // Informations du transfert d'image
        $enregistrement=false;
        $info_transfert="";

        if(isset($_POST['send'])){
            if (!(empty($_POST['titre']) && empty($_POST['date_parution']) && empty($_POST['sous_titre']) && empty($_POST['texte']) && empty($_FILES)) && $_FILES['img_article']['error'] == 0 && $_FILES['img_texte_1']['error'] == 0 && $_FILES['img_texte_2']['error'] == 0 && $_FILES['img_texte_3']['error'] == 0 && $_FILES['img_texte_4']['error'] == 0 && empty($_POST['video']) && empty($_POST['auteur'])) {

                //Données de l'ajout.
                $titre = htmlspecialchars($_POST['titre']);
                $date_parution = htmlspecialchars($_POST['date_parution']);
                $sous_titre = htmlspecialchars($_POST['sous_titre']);
                $texte = htmlspecialchars($_POST['texte']);
                $video = htmlspecialchars($_POST['video']);
                $auteur = htmlspecialchars($_POST['auteur']);

                // Informations de transfert de l'image associée à la programmation.
                $enregistrement = move_uploaded_file($_FILES["img_artiste"]["tmp_name"], "../img/programmation.php/" . $_FILES["img_artiste"]["name"]);
                $info_transfert .= "Le fichier a bien été transféré sous le nom: " . $_FILES["img_artiste"]["name"];
                $img_artiste = "img/programmation.php/" . $_FILES["img_artiste"]["name"];

                // Insertion de la programmation.
                $data = "programmation (nom_artiste, date_programmation, description, img_artiste, tarif) 
                                        VALUES ('$nom_artiste', '$date_programmation', '$description', '$img_artiste', '$tarif')";
                $ajouterProgrammation=$this->model->insert($data);

                $message_systeme = "Nouvelle programmation ajoutée au site.";
            }
        }
        require ('../App/View/getAddArticle.php');
    }

}