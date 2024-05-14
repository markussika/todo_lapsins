<?php
require "../App/core/Validator.php";
require "../App/core/Database.php";
auth();
$config = require("../App/config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $db = new Database($config);
    $errors = [];

    if(!Validator::string($_POST["name"])){
        $errors["name"] = "Name incorrect";
    }
    if(!Validator::string($_POST["description"])){
        $errors["description"] = "Description incorrect";
    }
    if(!Validator::string($_POST["due"])){
        $errors["due"] = "Due date incorrect";
    }
    if(empty($errors)){
        $query = "INSERT INTO todos (name, description, due, user_id) 
        VALUES (:name, :description, :due, :user_id);";
        $params = [
            ":name" => $_POST["name"],
            ":description" => $_POST["description"],
            ":due" => $_POST["due"],
            ":user_id" => $_SESSION["user_id"]
        ];
        $db->execute($query, $params);
    
        header("Location: /");
        die();
    }
}
$title = "Create";
require "../App/views/create.view.php";