<?php
require_once ("Repositories/QuoteRepositoryInterface.php");

class QuoteService {

    private QuoteRepositoryInterface $quoteRepository;

    public function __construct(QuoteRepositoryInterface $quoteRepository) {
        $this->quoteRepository = $quoteRepository;
    }

    public function offers(){
        
        $name = $_REQUEST["name"];
        $lastName = $_REQUEST["last_name"];
        $dateBirth = $_REQUEST["date_birth"];
        $licensePlate = $_REQUEST["license_plate"];

        $offer = $this->quoteRepository->getAllOffer();

        $quotes = array();

        for ($i=0; $i < count($offer) ; $i++) {

            $quotes[$i]["noCotizacion:"] = random_int(100000,999999);;
            $quotes[$i]["nombreProducto"] = $offer[$i]["name"];
            $quotes[$i]["valor"] = $offer[$i]["value"];
            $quotes[$i]["placa"] = $licensePlate;
        }

        return $quotes;
    }

}