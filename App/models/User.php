<?php
require "../App/core/Database.php";
class User{
    private $db;
    private $config;

    public function __construct(){
        $config = require("../App/config.php");
        $this->db = new Database($config);
    }
    public function user(){
        $query = "SELECT * FROM users WHERE username = :username";
        $params = [
          ":username" => $_POST["username"]
        ];
        return $this->db->execute($query, $params)->fetch();    
    }
    public function allusers(){
        $query = "SELECT * FROM users"; 
        $params = [];
        return $this->db->execute($query, $params)->fetchAll();
    }
    public function createUser(){
        $query = "INSERT INTO users (username, password) VALUES (:username, :password)";
        $params = [
          ":username" => $_POST["username"],
          ":password" => password_hash($_POST["password"], PASSWORD_BCRYPT)
        ];
        $this->db->execute($query, $params);
    }
}