<?php
guest();
require "../App/core/Validator.php";
require "../App/models/User.php";

$model = new User();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  $errors = [];

  if (!Validator::username($_POST["username"])) {
    $errors["username"] = "Nepareiz lietotajvarda formāts";
  }
  $user = $model->user();

  if (!$user || !password_verify($_POST["password"], $user["password"])) {
    $errors["username"] = "Kaut kas nav labi";
  }

  if (empty($errors)) {
    $_SESSION["user"] = true;
    $_SESSION["username"] = $_POST["username"];
    $_SESSION["user_id"] = $user["id"];

    header("Location: /");
    die();
  }

  if ($_SESSION["user"] = true){
    return "../App/views/components/navbar.auth.php";
  }elseif ($_SESSION["user"] = false){
    return "../App/views/components/navbar.guest.php";
  }

}



$title = "Login";
require "../App/views/login.view.php";

