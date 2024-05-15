<?php

require "../App/models/Todo.php";

$model = new Todo();
$todos = $model->all();
$title = "Home page";
require "../App/views/index.view.php";