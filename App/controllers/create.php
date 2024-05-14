<?php
require "../App/core/Validator.php";
require "../App/core/Database.php";
require "../App/Core/functions.php";

$config = require("../App/config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $db = new Database($config);

}

require "../App/views/create.view.php";