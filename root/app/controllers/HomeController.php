<?php



namespace app\controllers;
use lib\Controller;
class HomeController extends Controller
{


    public function index()
    {

        // return "avla";
        return $this->view('HomeView');
    }

    

}

?>