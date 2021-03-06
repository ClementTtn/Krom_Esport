<?php

namespace App\Model;

use App\Entity\Actualites;
use PDO;

// Model de la classe Actualites
class ActualitesModel extends Model
{
    protected string $table;
    protected string $ordre;

    public function __construct()
    {
        parent::__construct();
        $this->table = "Actualites";
        $this->ordre = "id DESC";
    }

}