<?php

abstract class Api {

    public static array $route = [

        "QuoteController" => [

            "GET" => ["/api/cotizar", "getQuotes"],
            "POST" => ["/api/cotizar", "offer"],
            "PUT" => ["/api/cotizar/{id}", "update"],

        ],

        "ProductController" => [

            "GET" => ["/api/product", "Show"],
            "POST" => ["/api/product", "Create"],
            "PUT" => ["/api/product/{id}", "Update"],

        ]

    ];

}