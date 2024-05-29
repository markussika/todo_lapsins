<?php
require "../App/core/Validator.php";
require "../App/models/Todo.php";
$model = new Todo();

$page = 1;
if(isset($_GET['page']) ) {
    if($_GET['page'] != 0 && !empty($model)){
        echo $_GET['page'];
        $page += $_GET['page']-1;
    }
}
$start = $page*5 - 5;
$todos = $model->getJoinedAndGroupedTodos($start, 5);
echo $start." ";    

if (isset($_POST["search"]) && !empty(trim($_POST["search"]))) {
    $todos = $model->search();
}

function dueCheck($due, $comp){
    $dueDays = (strtotime($due)-strtotime(date("Y-m-d"))) / (60 * 60 * 24);
    $comp == 1 ? $warning = "" :
    ($dueDays < 0 ? $warning = $warning = "color:red;" : 
    ($dueDays <= 1 && $dueDays >= 0 ? $warning = "color:yellow;" : $warning = "")) ;
    return $warning;
}

$title = "Home page";
require "../App/views/index.view.php";
?>