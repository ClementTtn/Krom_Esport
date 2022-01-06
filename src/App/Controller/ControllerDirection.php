<?php

namespace App\Controller;

use App\Model\DirectionModel;

class ControllerDirection
{
    private $model;

    public function __construct()
    {
        $this->model = new DirectionModel();
    }

    // Affiche l'ensemble des personnes de l'équipe.
    public function findDirection(){
        $listeEquipeDirection=$this->model->findAll();

        require('App/View/getEquipeDirection.php');
    }

}