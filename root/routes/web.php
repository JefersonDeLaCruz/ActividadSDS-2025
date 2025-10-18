<?php


use lib\Route;
use app\controllers\HomeController;
use app\controllers\DiaUnoController;
use app\controllers\DiaDosController;
use app\controllers\DiaCuatroController;
use app\controllers\DiaCincoController;
use app\controllers\DiaTresController;
use app\controllers\InicioController;
use app\controllers\VisitasController;




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

Route::get("/DiaCuatro", function() {
    $controller = new DiaCuatroController();
    return $controller->index();
});

Route::get("/DiaCinco", function() {
    $controller = new DiaCincoController();
    return $controller->index();
});
Route::get("/DiaTres", function() {
    $controller = new DiaTresController();
    return $controller->index();
});
Route::get("/Inicio", function() {
    $controller = new InicioController();
    return $controller->index();
});


Route::get("/Visita", function() {
    $controller = new VisitasController();
    return $controller->index();
});


Route::post("/visitas/registrar", function() {
    $controller = new VisitasController();
    return $controller->store();
});





Route::dispatch();




?>