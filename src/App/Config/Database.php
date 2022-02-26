<?php
namespace App\Config;

use PDO;

class Database{

    // Connexion vers la base de données
    private string $host = "localhost";
    private string $db_name = "u150159319_krom";
    private string $username = "u150159319_krom";
    private string $password = "}&b!9(&-PK4M";


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