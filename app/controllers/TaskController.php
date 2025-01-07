<?php
namespace app\controllers;
use app\models\Task;
require __DIR__ . '/../models/Task.php';

class TaskController
{
    private $taskModel;
    public function __construct(){
        $this->taskModel = new Task();
    }
    public function index(){
        $tasks= $this->taskModel->getAllTasks();
        require __DIR__  . "/../views/Tasks.php";
    }
    public function stroe(){
        if (isset ($_POST['title']) && !empty($_POST['title'])) {
            $this->taskModel->addTask($_POST['title']);
        }
    }
    public function delete(){
        if(isset($_GET['id']) && !empty($_GET['id'])){
            $this->taskModel->deleteTask($_GET['id']);
        }
    }

}