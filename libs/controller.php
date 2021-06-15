<?php

namespace Libs;
class Controller{

  protected $templates;
  protected $dao;

  public function loadTemplate(string $directory)
  {
    $this->templates = new \League\Plates\Engine(MAINPATH . 'app/views/' . $directory);
    $this->templates->setFileExtension("php");
  }
  public function loadDAO(string $daoName){
    $classDAO = "App\\Daos\\".$daoName . "DAO";
    $this->dao = new $classDAO();
  }
}