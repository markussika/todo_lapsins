<?php

require "../App/Core/Database.php";
$config = require "../App/config.php";


$query = "SELECT * FROM todos"; 
$params = [];
$db = new DataBase($config);
$todos = $db->execute($query, $params)->fetchAll();




require "../App/views/index.view.php";