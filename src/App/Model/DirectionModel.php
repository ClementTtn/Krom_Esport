<?php

namespace App\Model;

use App\Entity\Direction;
use PDO;

class DirectionModel extends Model
{
    protected string $table;
    protected string $ordre;

    public function __construct()
    {
        parent::__construct();
        $this->table = "Direction";
        $this->ordre = "id";
    }

}