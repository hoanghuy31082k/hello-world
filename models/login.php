<?php
class Account
{
    private $username;
    private $password;
    public $userid;
    public function __construct($username , $password, $userid)
    {
        $this->username = $username;
        $this->password = $password;
        $this->userid = $userid;
    }
    public static function checkaccount($username,$password) {
        $result = array('status','mess');
        try {
            $db = DB::getInstance();
            $query = "SELECT * FROM account WHERE password = '$password' AND username = '$username';";
            if ($db -> exec($query) !== false) {
                $result['status']=true;
                $result['mess']='Login success!';
            } else {
                $result['status']=false;
                $result['mess']='Login fail!';
            }
        } catch (Exception $e) {
            $result['status']=false;
            $result['mess']='Error: ' +$e;
        }
        return $result;
    }
}
?>