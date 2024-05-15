<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>login</title>
  <link rel="stylesheet" href="../public/styles/login.style.css">

  

<?php require "../App/views/components/navbar.php" ?>


<div class="loginform">
        
        <form method="POST">
        <h2>Login</h2>

        <label for="username">Username:</label>
        <?php if(isset($errors["username"])) {?>
    <p class="error"><?= $errors["username"] ?></p>
  <?php } ?>
        <input name="username" type="text" placeholder="Username" id="username">

        <label for="password">Password:</label>
        <?php if(isset($errors["password"])) {?>
    <p><?= $errors["password"] ?></p>
  <?php } ?>
        <input name="password" type="password" placeholder="Password" id="password">
        <input type="submit" name="login-btn" value="Login">
           
        
    </form>      
    </div>
    


<?php require "../App/views/components/footer.php" ?>