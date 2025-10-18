<?php
namespace app\controllers;
use lib\Controller;

class DiaTresController extends Controller
{
    public function index()
    {

        // return "avla";
        return $this->view('DiaTresView');
    }
}   


?>