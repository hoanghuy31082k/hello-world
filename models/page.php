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
    public static function timkiem($tukhoa) {
        $list = [];
        try {
            if (preg_match("/\W/",$tukhoa)) {
                return NULL;
            } else {
                $db = DB::getInstance();
                $req = $db -> query("SELECT * FROM dsnv WHERE id LIKE N'%$tukhoa%' OR hoten LIKE N'%$tukhoa%' OR tuoi LIKE N'%$tukhoa%';");
                foreach ($req->fetchAll() as $item) {
                    $list[] = new Page($item['id'], $item['hoten'], $item['tuoi']);
                }
                return $list;
            }
        } catch (Exception $e) {
            print("Error: "+$e);
        }
    }
    public static function xoabang($id) {
        $result = array('status','mess');
        try {
            $db = DB::getInstance();
            $query = "DELETE FROM dsnv WHERE id=" .$id. ";";
            if ($db -> exec($query) !== false) {
                $result['status']=true;
                $result['mess']='Xoá thành công';
            } else {
                $result['status']=false;
                $result['mess']='Xoá thất bại';
            }
        } catch (Exception $e) {
            $result['status']=false;
            $result['mess']='Error: ' +$e;
        }
        return $result;
    }
}