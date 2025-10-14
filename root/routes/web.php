<?php


use lib\Route;
use app\controllers\HomeController;



Route::get("/Home", [HomeController::class, "index"]);

Route::get("/", function() {
    $controller = new HomeController();
    return $controller->view("HomeView");
});



Route::dispatch();




?>