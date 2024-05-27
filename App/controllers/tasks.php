<?php

auth();

require "../App/core/Validator.php";
require "../App/models/Todo.php";


$model = new Todo();
$todos = $model->userTodos();

$groupedTodos = [];
foreach ($todos as $todo) {
    $dueDate = $todo["due"];
    if (!isset($groupedTodos[$dueDate])) {
        $groupedTodos[$dueDate] = [];
    }
    $groupedTodos[$dueDate][] = $todo;
}


$title = "Ur todos";
require "../App/views/tasks.view.php";