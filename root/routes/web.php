<?php


use lib\Route;
use app\controllers\HomeController;
use app\controllers\DiaUnoController;
use app\controllers\DiaDosController;



Route::get("/Home", [HomeController::class, "index"]);

Route::get("/", function() {
    $controller = new HomeController();
    return $controller->index();
});


Route::get("/DiaUno", function() {
    $controller = new DiaUnoController();
    return $controller->index();
});

Route::get("/DiaDos", function() {
    $controller = new DiaDosController();
    return $controller->index();
});



Route::dispatch();




?>