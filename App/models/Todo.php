<?php
require "../App/core/Database.php";
    class Todo{
        private $db;
        private $config;
        public function __construct(){
            $config = require("../App/config.php");
            $this->db = new Database($config);
        }
        public function create(){
            $query = "INSERT INTO todos (name, description, due, user_id) 
            VALUES (:name, :description, :due, :user_id);";
            $params = [
                ":name" => $_POST["name"],
                ":description" => $_POST["description"],
                ":due" => $_POST["due"],
                ":user_id" => $_SESSION["user_id"]
            ];
            $this->db->execute($query, $params);
        }
    }