<?php
require "../App/core/Validator.php";
require "../App/models/Todo.php";
auth();

$model = new Todo();
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
        $model->update();
        header("Location: /");
        die();
    }
}
$todos = $model->find();


$title = "Edit";
require "../App/views/edit.view.php";