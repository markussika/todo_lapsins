<?php

require "../App/models/Todo.php";
$model = new Todo();
$todos = $model->todojoin();
$title = "Home page";
require "../App/views/index.view.php";