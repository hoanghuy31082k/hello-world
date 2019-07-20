<?php
$controllers = array(
  # Mỗi khi thêm action hay Controller thì phải add vào Route
  # Nếu không thì không thể sử dụng >>>>> 
  'pages' => ['home', 'error', 'timkiem','xoabang'],
);
if (!array_key_exists($controller, $controllers) || !in_array($action, $controllers[$controller])) {
  $controller = 'pages';
  $action = 'error';
}
include_once('controllers/' . $controller . '_controller.php');
$klass = str_replace('_', '', ucwords($controller, '_')) . 'Controller';
$controller = new $klass;
$controller->$action();