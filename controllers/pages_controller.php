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
    $pages = Page::timkiem($id);
    $data = array('pages' => $pages);
    $this->render('timkiem', $data);
  }

  public function xoabang()
  {
    $this->render('xoabang');
  }

  public function error()
  {
    $this->render('error');
  }
}
