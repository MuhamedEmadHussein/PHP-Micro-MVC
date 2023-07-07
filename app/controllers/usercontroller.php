<?php
namespace MVC\controllers;
use MVC\core\controller;
use MVC\core\Session;
use MVC\models\bookings;
use Rakit\Validation\Validator;
class usercontroller extends controller{
    
    public function __construct(){
        Session::Start();
        $user = Session::Get('user');
        print_r($user);
        if(empty($user)){
            echo "Class Not Access";
            die;
        }
    }
    public function index(){
        echo "user";
    }
    public function add(){
        echo "add";
    }
}

?>