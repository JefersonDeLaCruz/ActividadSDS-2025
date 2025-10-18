<?php

namespace app\controllers;
use lib\Controller;

    class DiaCincoController extends  Controller
    {
        public function index(){
            return $this->view("DiaCincoView");
        }
    }
    
?>