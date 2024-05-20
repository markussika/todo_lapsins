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
    $errors["username"] = "Nepareiz lietotājvārda formāts";
  }
  // if (!Validator::password($_POST["password"])) {
  //   $errors["password"] = "Parolē ir nepilnības";
  // }
  // PĀRBAUDĪS, VAI datubāzē ir e-pasts
  // 
  $result = $model->user();

  if ($result) {
    $errors["username"] = "Konts jau pastāv";
  }

  if (empty($errors)) {
    $model->createUser();

    $_SESSION["flash"] = "Tu esi veiksmīgi reģistrēts";
    header("Location: /login");
    die();
  }
}


// Ielikt DB

$title = "Register";

require "../App/views/register.view.php";