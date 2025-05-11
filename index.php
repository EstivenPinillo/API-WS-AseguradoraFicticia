<?php

require_once "Route/Api.php";
require_once "Route/Web.php";
require_once "Route/Route.php";

Route::registerRoutes(
    Api::$route,
    Web::$route,
);

Route::passRequestToController();