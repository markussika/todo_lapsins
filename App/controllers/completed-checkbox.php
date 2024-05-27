<?php
require "../App/models/Todo.php";
auth();
$model = new Todo();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $model->checkbox();
}

$title = "Changing";
$previous_page = $_SERVER['HTTP_REFERER'] ?? '/';
header("Location: $previous_page");