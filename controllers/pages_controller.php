<?php
require_once('controllers/base_controller.php');
require_once('models/page.php');

class PagesController extends BaseController
{
  function __construct()
  {
    $this->folder = 'pages';
  }

  public function home()
  {
    $pages = Page::getData();
    $data = array('pages' => $pages);
    $this->render('home', $data);
  }

  public function timkiem()
  {
    if(isset($_GET['tukhoa'])) {
      $id = $_GET['tukhoa'];
    }
    $pages_s = Page::timkiem($id);
    $data = array('pages' => $pages);
    $this->render('timkiem', $data);
  }

  public function xoabang()
  {
    if(isset($_GET['id'])) {
      # Get id từ URL 
      $id = $_GET['id'];
      # Call function Delete từ Model  
      $status = Page::xoabang($id);
      # Đây là function load lại page ---> 
      $pages = Page::getData();
      $data = array('pages' => $pages);
      $this->render('home', $data);
    }
    else {
      PagesController::home;
    }
  }

  public function error()
  {
    $this->render('error');
  }
}
