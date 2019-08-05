<?php
require_once('controllers/base_controller.php');
require_once('models/login.php');

class AccountController extends BaseController
{
  function __construct()
  {
    $this->folder = 'accounts';
  }
  public function login()
  {
    $this->render('login');
  }
  public function checklogin() {
    if(isset($_POST['username']) && isset($_POST['password'])) {
      $username = $_POST['username'];
      $password = $_POST['password'];
      $status = Account::checkaccount($username,$password);
      echo json_encode($status);
      die();
    }
  }
}
