<?php
guest();
require "../App/core/Validator.php";
require "../App/models/User.php";

$model = new User();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  $errors = [];

  if (!Validator::username($_POST["username"])) {
    $errors["username"] = "Wrong format";
  }
  $user = $model->user();

  if (!$user || !password_verify($_POST["password"], $user["password"])) {
    $errors["password"] = "Wrong format";
  }
  if (empty($errors)) {
    $_SESSION["user"] = true;
    $_SESSION["username"] = $_POST["username"];
    $_SESSION["user_id"] = $user["id"];

    header("Location: /");
    die();
  }
}

$title = "Login";
require "../App/views/login.view.php";

