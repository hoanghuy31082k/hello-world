<?php
class Page
{
    public $id;
    public $ten;
    public $tuoi;
    public function __construct($id, $ten, $tuoi)
    {
        $this->id = $id;
        $this->ten = $ten;
        $this->tuoi = $tuoi;
    }
    public static function getData()
    {
        $list = [];
        try {
            $db = DB::getInstance();
            $req = $db->query('SELECT * FROM dsnv');
            foreach ($req->fetchAll() as $item) {
                $list[] = new Page($item['id'], $item['ten'], $item['tuoi']);
            }
            return $list;
        } catch (Exception $e) {
            print("Error: "+$e);
        }
    }
    public static function timkiem($id) {
        $list = [];
        try {
            $db = DB::getInstance();
            $req = $db -> query('SELECT * FROM dsnv WHERE $id = :id');
            foreach ($req->fetchAll() as $item) {
                $list[] = new Page($item['id'], $item['ten'], $item['tuoi']);
            }
            return $list;
        } catch (Exception $e) {
            print("Error: "+$e);
        }
    }
}