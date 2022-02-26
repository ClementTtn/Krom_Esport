<?php

namespace App\Model;

use App\Entity\Direction;
use PDO;

// Model de la classe Calendrier
class CalendrierModel extends Model
{
    protected string $table;
    protected string $ordre;

    public function __construct()
    {
        parent::__construct();
        $this->table = "Calendrier";
        $this->ordre = "id";
    }

}