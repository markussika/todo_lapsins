<?php
require "../App/core/Database.php";
class User{
    private $db;
    private $config;

    public function __construct(){
        $config = require("../App/config.php");
        $this->db = new Database($config);
    }
    public function all(){
        $query = "SELECT * FROM users"; 
        $params = [];
        return $this->db->execute($query, $params)->fetchAll();
    }
}