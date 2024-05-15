<?php
require "../App/core/Validator.php";
require "../App/core/Database.php";
auth();
$config = require("../App/config.php");
$db = new Database($config);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
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
        $query = "UPDATE todos SET name = :name, description = :description, due = :due, user_id = :user_id WHERE id = :id;";
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

$query = "SELECT * FROM todos WHERE id = :id";
  $params = [":id" => $_GET["id"]];
  $todos = $db->execute($query, $params)->fetch();


$title = "Edit";
require "../App/views/edit.view.php";