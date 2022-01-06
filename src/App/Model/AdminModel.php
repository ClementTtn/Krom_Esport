<?php

namespace App\Model;

use App\Entity\Admin;
use PDO;

class AdminModel extends Model
{
    protected string $table;
    protected string $elements;

    public function __construct()
    {
        parent::__construct();
        $this->table = "Admin";
        $this->elements = "id, prenom, nom";
    }

}