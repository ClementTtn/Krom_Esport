<?php

namespace App\Model;

use App\Config\Database;

use PDO;

// Model général
abstract class Model
{
    protected $connexion;
    protected string $table;
    protected string $ordre;
    protected string $elements;

    public function __construct()
    {
        $this->connexion = (new DataBase ())->getConnection();
    }

    // Affichage des données

    // Afficher un élément de id.
    public function findOne(int $id) : array {
        $req = $this->connexion->prepare("SELECT * FROM " . $this->table . " WHERE id = :id");
        $req->BindParam(":id",$id);
        $req->execute();
        return $req->fetch(PDO::FETCH_ASSOC);
    }

    // Afficher un membre du staff en fonction de id_staff.
    public function findOneStaff(int $id_staff) : array {
        $req = $this->connexion->prepare("SELECT * FROM " . $this->table . " WHERE id = :id");
        $req->BindParam(":id",$id_staff);
        $req->execute();
        return $req->fetch(PDO::FETCH_ASSOC);
    }

    // Afficher un membre du staff en fonction de id_pilote.
    public function findOnePilote(int $id_pilote) : array {
        $req = $this->connexion->prepare("SELECT * FROM " . $this->table . " WHERE id = :id");
        $req->BindParam(":id",$id_pilote);
        $req->execute();
        return $req->fetch(PDO::FETCH_ASSOC);
    }

    // Afficher l'ensemble des éléments.
    public function findAll() : array {
        $req = $this->connexion->prepare("SELECT * FROM " . $this->table . " ORDER BY " . $this->ordre . " ");
        $req->execute();
        return $req->fetchAll(PDO::FETCH_ASSOC);
    }

    // Afficher les derniers articles (les plus récents en fonction de la date).
    public function findDerniers() : array {
        $req = $this->connexion->prepare("SELECT * FROM " . $this->table . " ORDER BY " . $this->ordre . " LIMIT 3");
        $req->execute();
        return $req->fetchAll(PDO::FETCH_ASSOC);
    }




    // Insertion de données.
    public function insert(string $data) : int{
        $req = $this->connexion->prepare("INSERT INTO " . $data . " ");
        $req->execute();
        return $req->rowCount();
    }




    // Mise à jour de données.

    // Modification de données.
    public function update(string $data, $id): int {
        $req = $this->connexion->prepare("UPDATE " . $this->table . " SET " . $data . " WHERE id = :id");
        $req->BindParam(":id",$id);
        $req->execute();
        return $req->rowCount();
    }

    // Suppression de données.
    public function delete(int $id): void{
        $req = $this->connexion->prepare("DELETE FROM " . $this->table . " WHERE id = :id");
        $req->BindParam(":id",$id);
        $req->execute();
    }

    //Transfert de données vers une autre table -> archivage.
    public function transfert(string $data1, $data2, $id): int{
        $req = $this->connexion->prepare("INSERT INTO " . $data1 . " SELECT " . $data2 . " WHERE id = :id");
        $req->BindParam(":id",$id);
        $req->execute();
        return $req->rowCount();
    }




    // Formulaires

    // Vérification de l'existence d'identifiants de connexion.
    public function findLogin(string $mail, string $mdp) : array {
        $req = $this->connexion->prepare("SELECT COUNT(*) AS verifLogin FROM " . $this->table . " WHERE mail = :mail AND mdp = :mdp");
        $req->BindParam(":mail",$mail);
        $req->BindParam(":mdp",$mdp);
        $req->execute();
        return $req->fetch(PDO::FETCH_ASSOC);
    }

    // Connexion à l'espace admin.
    public function getLogin(string $mail, string $mdp) : object {
        $req = $this->connexion->prepare("SELECT " . $this->elements . " FROM " . $this->table . " WHERE mail = :mail AND mdp = :mdp");
        $req->BindParam(":mail",$mail);
        $req->BindParam(":mdp",$mdp);
        $req->execute();
        return $req->fetch(PDO::FETCH_OBJ);
    }

}