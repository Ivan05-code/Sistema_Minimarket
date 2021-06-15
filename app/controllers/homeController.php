<?php

namespace App\Controllers;
use Libs\Controller;

class HomeController extends Controller
{
    public function __construct(){
        $this->loadTemplate('home');
        //$this->loadTemplate('comestibles');
    }
    public function index()
    {
        echo $this->templates->render('index');
       // echo $this->template->render('groceries');
   
    }
   
    
}
