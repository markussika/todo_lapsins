<?php
require "../App/core/Validator.php";
require "../App/models/Todo.php";
auth();

$model = new Todo();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $errors = [];

    if(!Validator::string($_POST["name"],min: 1, max: 255)){
        $errors["name"] = "Name incorrect";
    }
    if(!Validator::string($_POST["description"],min: 1)){
        $errors["description"] = "Description incorrect";
    }
    if(!Validator::date($_POST["due"],'2024-05-15')){
        $errors["due"] = "Due date incorrect";
    }
    if(empty($errors)){
        $model->create();
        header("Location: /");
        die();
    }
}
$title = "Create";
require "../App/views/create.view.php";