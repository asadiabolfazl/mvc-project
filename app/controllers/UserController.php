<?php
use app\models\UserModel;
require __DIR__ . '/../models/UserModel.php';

class UserController
{
    private $Model;
    public function __construct(){
        $this->Model = new UserModel();
    }
    public function index(){
        $this->usermodel->index();
        //to do implement view
    }
    public function signup(){
        if (isset($_POST['name']) && isset($_POST['password']) && !empty($_POST['name'])
            && !empty($_POST['password'])){
            $this->Model->addUser($_POST['name'], $_POST['password']);
        }
    }
    public function deleteUser(){
        if(isset($_GET['id']) && !empty($_GET['id'])){
            $this->Model->deleteUser($_GET['id']);
        }
    }


}