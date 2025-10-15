<?php
namespace app\controllers;
use lib\Controller;

class DiaDosController extends Controller
{
    public function index()
    {

        // return "avla";
        return $this->view('DiaDosView');
    }
}   


?>