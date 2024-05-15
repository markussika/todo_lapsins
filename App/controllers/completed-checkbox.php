<?php
require "../App/models/Todo.php";
auth();
$model = new Todo();
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $model->checkbox();

}

$title = "Changing";
header("Location: /");