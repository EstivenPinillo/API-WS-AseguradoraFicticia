<?php 

require_once(__DIR__."/QuoteRepositoryInterface.php");
require_once(__DIR__."/Config/DatabaseInterface.php");

class QuoteRepository implements QuoteRepositoryInterface {

    private DatabaseInterface $database;

    public function __construct(DatabaseInterface $database){
        $this->database = $database;
    }
    
    public function getAllOffer(): array {

        $connection = $this->database->connection();

        $sql = $connection->query("select * from products where category_id=1");
        $products = $sql->fetchAll(PDO::FETCH_ASSOC);

        return $products;
    
    }
    

}
