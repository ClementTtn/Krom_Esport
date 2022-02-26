<?php

namespace App\Controller;

use App\Model\EquipeModel;

// Controller de la classe Equipe
class ControllerEquipe
{
    private $model;

    public function __construct()
    {
        $this->model = new EquipeModel();
    }

    //Affiche le profil d'un pilote
    public function findOnePilote(){
        $id_pilote = htmlspecialchars($_GET['id_pilote']);
        $pilote=$this->model->findOnePilote($id_pilote);

        require('App/View/getUnPilote.php');
    }

    // Affiche l'ensemble des pilotes
    public function findEquipe(){
        $listeEquipeDirection=$this->model->findAll();

        require('App/View/getListeEquipe.php');
    }

}