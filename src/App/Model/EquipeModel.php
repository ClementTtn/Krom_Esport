<?php

namespace App\Model;

use App\Entity\Equipe;
use PDO;

// Model de la classe Equipe
class EquipeModel extends Model
{
    protected string $table;
    protected string $ordre;

    public function __construct()
    {
        parent::__construct();
        $this->table = "Equipe";
        $this->ordre = "id";
    }

}