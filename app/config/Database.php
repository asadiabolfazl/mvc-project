<?php

namespace app\config;
use PDOException;
use PDO;
class Database
{
private static $host= "127.0.0.1";
private static $userName= "root";
private static $password= "";
private static $dbname= "mvc";
public static function  connect(){

         try {
             $servername = self::$host;
             $username = self::$userName;
             $password = self::$password;
             $dbname = self::$dbname;
             return new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

//        return new \PDO("mysql:host=" . self::$servername. ";dbname=" . self::$dbname ,
//            self::$username,
//           self::$password);


    }catch (PDOException $e){
        die ("connection failed" . $e->getMessage());
    }
}

}