<?php

namespace MVC\controllers;
use MVC\core\controller;
use MVC\core\helpers;
use MVC\core\Session;
use MVC\models\bookings;
use MVC\models\users;
use Rakit\Validation\Validator;

class homecontroller extends controller{
    public function __construct(){
        Session::Start();
    }
    public function index(){
     $bookings = new bookings();
     $data = $bookings->get_All_Bookings();   
     $this->view("home\index",['title'=>'MVC','h1'=>'Mo Emad','data'=>$data]);

    }

    public function login(){
        $title = "Login";
        $this->view("home\login",["title"=>$title]);
        
    }

    public function postlogin(){
        echo "<pre>";
        $validator = new Validator();
        $validation = $validator->make($_POST,[
            'email' => 'required',
            'password'=> 'required|min:6',
        ]);
        $validation->validate();
        if ($validation->fails()) {
            // handling errors
            $errors = $validation->errors();
            echo "<pre>";
            print_r($errors->firstOfAll());
            echo "</pre>";
            exit;
        } else {
            // validation passes
            $users = new users();
            $data = $users->get_user($_POST['email'],$_POST['password']);
            echo "<pre>";
            print_r($data);
            Session::Set('user',$data);
      helpers::redirect("user/index");
        }



    }
    public function Register(){
        $title = "Register";
        $this->view("home\Register",["title"=>$title]);
        
    }
    public function postRegister(){
        echo "<pre>";
        $validator = new Validator();
        $validation = $validator->make($_POST,[
            'email' => 'required',
            'password'=> 'required|min:6',
        ]);
        $validation->validate();
        if ($validation->fails()) {
            // handling errors
            $errors = $validation->errors();
            echo "<pre>";
            print_r($errors->firstOfAll());
            echo "</pre>";
            exit;
        } else {
            // validation passes
            $users = new users();
            $id = $users->add_user($_POST['id'],$_POST['name'],$_POST['password'],$_POST['email']);            
            echo $id;
            echo "Inserted Successfully";
        }
    }
    public function logout(){
        Session::Stop();
    }
}

?>