<?php
namespace MVC\core;

use Dcblogdev\PdoWrapper\Database;

class model{

    public static function db(){
        // make a connection to mysql here
        $options = [
            //required
            'username' => USERNAME,
            'database' => DATABASE_LITTLELEMON,
            //optional
            'password' => PASSWORD,
            'type' => DATABASE_TYPE,
            'charset' => 'utf8',
            'host' => SERVER,
            'port' => '3306'
        ];
        
        return $db = new Database($options);
    }

    public static function db_student(){
        // make a connection to mysql here
        $options = [
            //required
            'username' => USERNAME,
            'database' => DATABASE_STUDENT,
            //optional
            'password' => PASSWORD,
            'type' => DATABASE_TYPE,
            'charset' => 'utf8',
            'host' => SERVER,
            'port' => '3306'
        ];
        
        return $db = new Database($options);
    }
}


?>