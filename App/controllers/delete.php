<?php
auth();
require "../App/models/Todo.php";
$config = require("../App/config.php");
$model = new Todo();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $model->delete();
}

$title = "Destroy";
header("Location: /");
die();



