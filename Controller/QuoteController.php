<?php

require_once ("Services/QuoteService.php");
require_once ("Repositories/QuoteRepository.php");
require_once ("Repositories/Config/Database.php");
require_once ("View/ResponseJSON.php");

class QuoteController {

    private QuoteService $quoteService;
    
    public function __construct() {
        
        $datebase = new Database();
        $quoteRepository = new QuoteRepository($datebase);
        $this->quoteService = new QuoteService($quoteRepository);
    }

    public function offer(){
        
        $quotes = $this->quoteService->offers();
        $jsonQuotes = json_encode($quotes);
        ResponseJSON::response($jsonQuotes, "200 OK");
    }

}