<?php


use lib\Route;
use app\controllers\HomeController;
use app\controllers\DiaUnoController;



Route::get("/Home", [HomeController::class, "index"]);

Route::get("/", function() {
    $controller = new HomeController();
    return $controller->view("HomeView");
});


Route::get("/DiaUno", function() {
    $controller = new DiaUnoController();
    return $controller->view("DiaUnoView");
});



Route::dispatch();




?>