<?php 
require_once (__DIR__."/DatabaseInterface.php");

class  Database implements DatabaseInterface{

    private string $database;
    private string $host;
    private string $port;
    private string $databaseName;
    private string $password;
    private string $user;

    public function __construct() {

        $config = parse_ini_file("config.ini");

        $this->database = $config["DATABASE"];
        $this->host = $config["HOST"];
        $this->port = $config["PORT"];
        $this->databaseName = $config["DATABASE_NAME"];
        $this->user = $config["USER"];
        $this->password = $config["PASSWORD"];

    }

    public function connection(): PDO{
        
        try {

            $connetion = new PDO(
                "{$this->database}:host= {$this->host}:{$this->port};
                dbname={$this->databaseName}", 
                $this->user, 
                $this->password,
            );
            return $connetion;

        } catch (PDOException $PDOException) {
            header("HTTP/1.0 500 {$PDOException->getMessage()}");
        }

    }

}