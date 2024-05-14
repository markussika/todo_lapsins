<?php



// Dabūt datus no datu bāzes

require "../App/core/Database.php";
$config = require("../App/config.php");

$db = new Database($config);

$query = "SELECT * FROM todos WHERE id = :id";
$params = [":id" => $_GET["id"]];

$catalog = $db->execute($query, $params)->fetch();

$title = htmlspecialchars($catalog["name"]) ;


require "../App/views/show.view.php";