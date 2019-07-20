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
        # Câu query thì dùng như trên 
        # Các lệnh DELETE CREATE UPDATE thì dùng exec như phía dưới mới chạy được.
        $result = array('status', 'message');
        try {
            $db = DB::getInstance();
            $query = "DELETE FROM dsnv WHERE id = " .$id . ";";
            if ($db->exec($query) !== false) {
                $result['status'] = true;
                $result['message'] = "Delete success";
            } else {
                $result['status'] = false;
                $result['message'] = "Something's wrong. Please try again!";
            }
        } catch (Exception $e) {
            $result['status'] = false;
            $result['message'] = var_dump($e->getMessage());
        }
        # Kết quả trả về của Model sẽ là $result có 2 thuộc tình status và message --
        # Dùng để xác định có xóa được hay không? 
        return $result;
    }
}