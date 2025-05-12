<?php
require_once ("Repositories/QuoteRepositoryInterface.php");

class QuoteService {

    private QuoteRepositoryInterface $quoteRepository;

    public function __construct(QuoteRepositoryInterface $quoteRepository) {
        $this->quoteRepository = $quoteRepository;
    }

    public function offers(): array{
        
        $input = json_decode(file_get_contents('php://input'), true);

        if (!$input) {
            http_response_code(400);
            exit;
        }

        $name = $input["name"];
        $lastName = $input["last_name"];
        $dateBirth = $input["date_birth"];
        $licensePlate = $input["license_plate"];

        $offer = $this->quoteRepository->getAllOffer();

        $count = count($offer);
        $quotes = array();

        for ($i=0; $i < $count; $i++) {

            $quotes[$i]["noCotizacion"] = random_int(100000,999999);
            $quotes[$i]["nombreProducto"] = $offer[$i]["name"];
            $quotes[$i]["valor"] = "$". number_format($offer[$i]["value"], 0, '', '.');
            $quotes[$i]["placa"] = $licensePlate;
        }

        return $quotes;
    }

}