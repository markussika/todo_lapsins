<?php

auth();

require "../App/models/Todo.php";
// $model = new Todo();
// $todos = $model->todojoin();
$title = "Ur todos";
require "../App/views/tasks.view.php";