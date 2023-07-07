<?php 


namespace MVC\models;
use MVC\core\model;
use PDO;

/**
 * Summary of bookings
 */
class users extends model{
    public function get_All_users(){
        $data = model::db_student()->run("SELECT * FROM `admin`")->fetchAll(PDO::FETCH_ASSOC);
        
        return $data;
    }
    public function get_user($email,$password){
        $data = model::db_student()->run("SELECT * FROM `admin` WHERE `email`='$email' and `password`= '$password' ")->fetch(PDO::FETCH_ASSOC);
        
        return $data;
    }
    public function add_user($id,$name,$password,$email){
        
        $data = [
            'id' => $id,
            'name' => $name,
            'password' => $password,
            'email' => $email,
        ];
        
        $id = model::db_student()->insert('admin', $data);
        
        return $id;
    }


}

?>