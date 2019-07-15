<?php
class DB
{
    private static $instance = NULl;
    public static function getInstance() {
      if (!isset(self::$instance)) {
        try {
          self::$instance = new PDO('mysql:host=localhost;dbname=list', 'root', '');
          self::$instance->exec("SET NAMES 'utf8'");
          $sql = "SELECT * FROM $table";
          $ds = $pdo->query($sql);
          $ds->setFetchMode(PDO::FETCH_ASSOC);
        } catch (PDOException $ex) {
          die($ex->getMessage());
        }
      }
      return self::$instance;
    }
}