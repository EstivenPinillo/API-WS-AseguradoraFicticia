<?php 
/**
 * Ejemplo de 
 * 
 */
abstract class Web{

    public static array $route = [

        "Controller" => [

            "GET" => ["api/ques", "Show"],
            "POST" => ["api/queso", "Create"],
            "PUT" => ["api/queso/id", "Update"],

        ]

    ];

}