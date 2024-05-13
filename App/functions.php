<?php

function dd($data) {
  echo "<pre>";
  var_dump($data);
  echo "</pre>";
  die();
}

function auth() {
  if (!isset($_SESSION["user"])) {
    header("Location: /login");
    die();
  }
}
function admin() {
  if ($_SESSION["user"] !== "admin") {
    // Redirect to an unauthorized page or display an error message
    header("Location: /");
    die(); // Terminate script execution
  }
}

function guest() {
  if (isset($_SESSION["user"])) {
    header("Location: /");
    die();
  }
}