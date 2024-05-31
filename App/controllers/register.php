<?php
guest();


// Pieprasīt DB, config, Validator
require "../App/core/Validator.php";
require "../App/models/User.php";

$model = new User();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Validācija datu
  //  1. e-pasts - burti, @, .lv beate@ckc.lv
  //  2. parole vismaz 6 string
  $errors = [];

  if (!Validator::username($_POST["username"])) {
    $errors["username"] =  "Wrong format";
  }
  if (!Validator::password($_POST["password"])) {
    $errors["password"] = "Wrong format";
  }
  //PĀRBAUDĪS, VAI datubāzē ir e-pasts
  
  $result = $model->user();

  if ($result) {
    $errors["username"] = "Account already exists";
  }

  if (empty($errors)) {
    $model->createUser();

    $_SESSION["flash"] = "You have logged in";
    header("Location: /login");
    die();
  }
}


// Ielikt DB

$title = "Register";

require "../App/views/register.view.php";