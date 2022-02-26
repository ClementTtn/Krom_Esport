<?php

namespace App\Controller;

use App\Model\CalendrierModel;

// Controller de la classe Actualites
class ControllerCalendrier
{
    private $model;

    public function __construct()
    {
        $this->model = new CalendrierModel();
    }

    // Affiche toutes les dates du calendrier
    public function findCalendrier(){
        $listeCalendrier=$this->model->findAll();

        require('App/View/getCalendrier.php');
    }

    // Affiche toutes les dates du calendrier dans la section Admin.
    public function findCalendrierAdmin(){
        $listeCalendrierAdmin=$this->model->findAll();
        require('../App/View/getCalendrierAdmin.php');
    }

    // Ajouter une nouvelle date (depuis l'espace Admin).
    public function ajouterCalendrier(){
        // Conditions d'exécution
        if(isset($_POST['send'])){
            if (!(empty($_POST['date']) && empty($_POST['intitule']))) {

                //Données de l'ajout.
                $date = htmlspecialchars($_POST['date']);
                $heure = htmlspecialchars($_POST['heure']);
                $intitule = htmlspecialchars($_POST['intitule']);
                $lien_evenement = htmlspecialchars($_POST['lien_evenement']);

                // Variables de la requête d'ajout de la date.
                $data = "Calendrier (date, heure, intitule, lien_evenement) 
                                        VALUES ('$date', '$heure', '$intitule', '$lien_evenement')";
                $ajouterProgrammation=$this->model->insert($data);

                $message_systeme = "Date ajouté au calendrier du site.";
            }
        }
        require ('../App/View/getAddCalendrier.php');
    }

    // Modifier une date existante.
    public function modifierCalendrier(){
        $id = htmlspecialchars($_GET['id']);
        $calendrier=$this->model->findOne($id);

        if(isset($_POST['send'])){
            //Données de la modification
            $date = htmlspecialchars($_POST['date']);
            $heure = htmlspecialchars($_POST['heure']);
            $intitule = htmlspecialchars($_POST['intitule']);
            $lien_evenement = htmlspecialchars($_POST['lien_evenement']);

            // Variables de la requête de modification de la date.
            $data = "date='$date', heure='$heure', intitule='$intitule', lien_evenement='$lien_evenement'";
            $modifierCalendrier=$this->model->update($data, $id);

            header('location: modifier-calendrier');
        }
        require ('../App/View/getModifCalendrier.php');
    }

    // Archiver une date.
    public function archiverCalendrier(){
        if(isset($_POST['send'])){
            $id = htmlspecialchars($_GET['id']);

            // Variables de la requête de copie des données d'une date.
            // Copie des données dans la table "archive-calendrier'.
            $data1 = "Archives_calendrier (id, date, heure, intitule, lien_evenement)";
            $data2 = "id, date, heure, intitule, lien_evenement FROM Calendrier";
            $ajouterCalendrier=$this->model->transfert($data1, $data2, $id);

            //Suppression des données dans la table "calendrier".
            $supprimerCalendrier=$this->model->delete($id);

            $message_systeme = "Date du calendrier archivé.";
            header('location: modifier-calendrier');
        }
        $calendrier=$_GET['id'];
        require('../App/View/getArchiverCalendrier.php');
    }

}