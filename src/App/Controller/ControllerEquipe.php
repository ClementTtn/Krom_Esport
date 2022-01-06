<?php

namespace App\Controller;

use App\Model\EquipeModel;

class ControllerEquipe
{
    private $model;

    public function __construct()
    {
        $this->model = new EquipeModel();
    }

    // Affiche l'ensemble des personnes de la direction.
    public function findEquipe(){
        $listeEquipeDirection=$this->model->findAll();

        require('App/View/getEquipeDirection.php');
    }

}