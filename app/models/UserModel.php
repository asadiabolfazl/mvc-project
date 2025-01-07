<?php
use app\config\Database;
require __DIR__ . '/../config/Database.php';
class UserModel
{
    private $db;
    public function __construct(){
        $this->db = Database::connect();
    }
    public function getAllUsers(){
        $statement = $this->db->query('SELECT * FROM users');
        $statement->fetchAll(\PDO::FETCH_ASSOC);
    }
    public function addUser($name ){
        $statement = $this->db->prepare('INSERT INTO users(name ) VALUES (:name)');
        $statement->bindparam(':name' , $name);
        $statement->execute();

    }
    public function addPassUser($password){
        $statement = $this->db->prepare('INSERT INTO users(password) VALUES (password_hash(:password)');
        $statement->bindparam(':password' , $password);
        $statement->execute();
    }
    public function deleteUser($id){
        $statement = $this->db->prepare('DELETE FROM users WHERE id = :id');
        $statement->bindparam(':id' ,  $id);
    }

}