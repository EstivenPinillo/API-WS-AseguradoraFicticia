<?php

class ResponseJSON {

    public function __construct(){

    }

    public static function response($json,$status){
        header('Content-Type: application/json');
        header('HTTP/1.0 '.$status);
        
        echo $json ? $json: "";
    }

}