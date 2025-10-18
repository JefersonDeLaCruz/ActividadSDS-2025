<?php

namespace app\controllers;
use lib\Controller;

    class UserControllerController extends  Controller
    {
        public function index(){
            return $this->view("UserView");
        }
    }
    
?>