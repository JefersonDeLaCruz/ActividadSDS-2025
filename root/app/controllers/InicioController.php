<?php



namespace app\controllers;
use lib\Controller;
class InicioController extends Controller
{


    public function index()
    {

        // return "avla";
        return $this->view('InicioView');
    }

    

}

?>