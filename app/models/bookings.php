<?php 


namespace MVC\models;
use MVC\core\model;
use PDO;

/**
 * Summary of bookings
 */
class bookings extends model{
    public function get_All_Bookings(){
        $data = model::db()->run("SELECT * FROM bookings")->fetchAll(PDO::FETCH_ASSOC);
        
        return $data;
    }

}

?>