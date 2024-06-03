<?php
require "../App/core/Validator.php";
require "../App/models/Todo.php";
$model = new Todo();

$page = 1;
$limit = 7;
$maxpage = intdiv(count($model->all()), $limit)+1;
count($model->all())/$limit == 1 ? $maxpage =1 : '';
if(isset($_GET['page']) && $_GET['page'] != 0  && $_GET['page'] > 0 && is_numeric($_GET['page'] )) {
        $_GET['page'] > $maxpage ? $page = $maxpage : $page += $_GET['page']-1;
}
$start = $page*$limit - $limit;
$todos = $model->getJoinedAndGroupedTodos($start, $limit);

if (isset($_POST["search"]) && !empty(trim($_POST["search"]))) {
    $todos = $model->search();
}

function dueCheck($due, $comp){
    $dueDays = (strtotime($due)-strtotime(date("Y-m-d"))) / (60 * 60 * 24);
    $comp == 1 ? $warning = "" :
    ($dueDays < 0 ? $warning = $warning = "color:red;" : 
    ($dueDays <= 1 && $dueDays >= 0 ? $warning = "color:orange;" : $warning = "")) ;
    return $warning;
}

$title = "Home page";
require "../App/views/index.view.php";
?>