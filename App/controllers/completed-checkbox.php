<?php
require "../App/core/Validator.php";
require "../App/core/Database.php";
auth();
$config = require("../App/config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if(isset($_POST['completed-checkbox']))
    {
        $db = new Database($config);
        $errors = [];   
    
    
        $query = "UPDATE todos SET completed = :completed WHERE id = :id;";
        $params = [
            ":id" => $_POST["todo-id"],
            ":completed" => 1
        ];
        $db->execute($query, $params);
    }else
    {
        $db = new Database($config);
        $errors = [];
    
    
        $query = "UPDATE todos SET completed = :completed WHERE id = :id;";
        $params = [
            ":id" => $_POST["todo-id"],
            ":completed" => 0
        ];
        $db->execute($query, $params);
    }




}

$title = "Changing";
header("Location: /");