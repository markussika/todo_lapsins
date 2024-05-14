<?php
require "Validator.php";
require "Database.php";
$config = require("config.php");
$db = new Database($config);

$query = "SELECT * FROM posts WHERE id = :id";
$params = [
    ":id" => $_GET["id"]
];

//if ($_SERVER["REQUEST_METHOD"] == "POST" && trim($_POST["title"]) != "" && $_POST["category-id"] <= 3 && strlen($_POST["title"]) <= 255) {
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $errors = [];

  if (!Validator::string($_POST["title"],min: 1, max: 255)) {
    $errors["title"] = "Title cannot be empty";
  }

  if (strlen($_POST["title"]) > 255) {
    $errors["title"] = "Title too long";
  }
  if(!Validator::number($_POST["category_id"], min: 1, max: 3)) {
    $errors["category_id"] = "Category ID invalid";
  }

  if (empty($errors)) {
    $query = "UPDATE posts SET title = :title, category_id = :category_id WHERE id = :id;";
    $params = [
        ":id" => $_POST["id"],
        ":title" => $_POST["title"],
        ":category_id" => $_POST["category_id"]
    ];
    $db->execute($query, $params);

    header("Location: /");
    die();
  }

  
}

$post = $db->execute($query, $params)->fetch();

$title = "Create a Post";
require "views/posts/edit.view.php";