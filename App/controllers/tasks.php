<?php

auth();

require "../App/core/Validator.php";
require "../App/models/Todo.php";


$model = new Todo();
$todos = $model->userTodos();

$title = "Ur todos";
require "../App/views/tasks.view.php";