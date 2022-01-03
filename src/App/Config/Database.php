<?php
namespace App\Config;

use PDO;

class Database{

    // Connexion vers la base de données (ici en local)
    private string $host = "localhost";
    private string $db_name = "krom";
    private string $username = "root";
    private string $password = "root";

    /* Connexion vrs la base de données du serveur
    private string $host = "localhost";
    private string $db_name = "u932903713_krom";
    private string $username = "u932903713_krom";
    private string $password = "1EafVN!lNX[F";
    */


    private PDO $conn;


    // get the database connection
    public function getConnection() : PDO{

        try{
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
            $this->conn->exec("set names utf8");
        }catch(PDOException $exception){
            echo "Connection error: " . $exception->getMessage();
        }

        return $this->conn;
    }


}
?>