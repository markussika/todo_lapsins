<?php
require "../App/core/Database.php";
$config = require("../App/config.php");

$db = new Database($config);
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
  $query = "DELETE FROM todos WHERE id = :id";
  $params = [ ":id" => $_POST["id"]];
 
  $db->execute($query, $params);
}

header("Location: /");
die();



