<?php

namespace app\controllers;
use lib\Controller;

    class DiaCuatroController extends  Controller
    {
        public function index(){
            return $this->view("DiaCuatroView");
        }
    }
    
?>