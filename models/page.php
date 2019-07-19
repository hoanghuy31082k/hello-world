<?php
class Page
{
    public $id;
    public $hoten;
    public $tuoi;
    public function __construct($id, $hoten, $tuoi)
    {
        $this->id = $id;
        $this->hoten = $hoten;
        $this->tuoi = $tuoi;
    }
    public static function getData()
    {
        $list = [];
        try {
            $db = DB::getInstance();
            $req = $db->query('SELECT * FROM dsnv');
            foreach ($req->fetchAll() as $item) {
                $list[] = new Page($item['id'], $item['hoten'], $item['tuoi']);
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
            $req = $db -> query('SELECT * FROM dsnv WHERE id=$id');
            foreach ($req->fetchAll() as $item) {
                $list[] = new Page($item['id'], $item['hoten'], $item['tuoi']);
            }
            return $list;
        } catch (Exception $e) {
            print("Error: "+$e);
        }
    }
    public static function xoabang($id) {
        $list = [];
        try {
            $db = DB::getInstance();
            $req = $db -> query('DELETE FROM dsnv WHERE id = "$id"');
            foreach ($req->fetchAll() as $item) {
                $list[] = new Page($item['id'], $item['hoten'], $item['tuoi']);
            }
            return $list;
        } catch (Exception $e) {
            print("Error: "+$e);
        }
    }
}