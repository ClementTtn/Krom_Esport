<?php

namespace App\Model;

use App\Entity\Actualites_competition;
use PDO;

class Actualites_competionModel extends Model
{
    protected string $table;
    protected string $ordre;

    public function __construct()
    {
        parent::__construct();
        $this->table = "actualites";
        $this->ordre = "id DESC";
    }

}