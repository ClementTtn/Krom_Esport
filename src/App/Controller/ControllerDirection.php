<?php

namespace App\Controller;

use App\Model\DirectionModel;

// Controller de la classe Direction
class ControllerDirection
{
    private $model;

    public function __construct()
    {
        $this->model = new DirectionModel();
    }

    //Affiche le profil d'un pilote membre de la direction
    public function findOneStaff(){
        $id_staff = htmlspecialchars($_GET['id_staff']);
        $pilote=$this->model->findOneStaff($id_staff);

        require('App/View/getUnPilote.php');
    }

    // Affiche l'ensemble des membres de la direction.
    public function findDirection(){
        $listeEquipeDirection=$this->model->findAll();

        require('App/View/getListeDirection.php');
    }

}