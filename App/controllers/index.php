<?php
require "../App/core/Validator.php";
require "../App/models/Todo.php";
$model = new Todo();
$todos = $model->todojoin();
if (isset($_POST["search"]) && !empty(trim($_POST["search"]))) {
    $todos = $model->search();
}

$title = "Home page";
require "../App/views/index.view.php";