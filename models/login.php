<?php
include_once 'core.php';
include_once 'libs/php-jwt-master/src/BeforeValidException.php';
include_once 'libs/php-jwt-master/src/ExpiredException.php';
include_once 'libs/php-jwt-master/src/SignatureInvalidException.php';
include_once 'libs/php-jwt-master/src/JWT.php';
use \Firebase\JWT\JWT;
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
    public static function addUser($userid,$username,$password) {
        $result = array('status','mess');
        try {
            $db = DB::getInstance();
            $query = "INSERT INTO dsnv (userid, username, password) VALUES ('$userid', '$username', '$password');";
            if ($db -> exec($query) !== false) {
                $result['status']=true;
                $result['mess']='Thêm thành công';
            } else {
                $result['status']=false;
                $result['mess']='Thêm thất bại';
            }
        } catch (Exception $e) {
            $result['status']=false;
            $result['mess']='Error: ' +$e;
        }
        return $result;
    }
    public static function jwtdecode($userid,$username,$password) {
        $token = array(
           "iss" => $iss,
           "aud" => $aud,
           "iat" => $iat,
           "nbf" => $nbf,
           "data" => array(
               "userid" => $userid,
               "username" => $username,
               "password" => $password
           )
        );
     
        http_response_code(200);
     
        $jwt = JWT::encode($token, $key);
        return $jwt;
    }
}