<?php

namespace app\models;


use app\config\Database;
require __DIR__. '/../config/database.php';

class Task
{
    private $db;
    public function __construct(){
        $this->db = Database::connect();
    }
    public function getAllTasks(){
        $statement = $this->db->query('SELECT * FROM tasks');
        return $statement->fetchAll(\PDO::FETCH_ASSOC);
    }
    public function addTask($title){
        $statement  = $this->db->prepare('INSERT INTO tasks (title) VALUES (:title)');
        $statement->bindParam(":title", $title);
        $statement->execute();
    }
    public function deleteTask($id){
        $statement = $this->db->prepare('DELETE FROM tasks WHERE id = :id ');
        $statement->bindParam(":id", $id);
        $statement->execute();
    }



}