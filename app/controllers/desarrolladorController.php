<?php

namespace App\Controllers;
use Libs\Controller;
class DesarrolladorController extends Controller
{
    public function __construct(){
        $this->loadTemplate('desarrollador');
        //$this->loadTemplate('comestibles');
    }
    public function index()
    {
        echo $this->templates->render('index');
       
   
    }
}
