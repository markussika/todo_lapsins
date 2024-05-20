<?php require "../App/views/components/head.php" ?>
<?php if (isset($_SESSION["user"]) ){
     require "../App/views/components/navbar.auth.php";
    } else {
     require "../App/views/components/navbar.guest.php";
     } ?>

<div class="form-wrapper">
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
        <a href="/register">Don't have an account?</a>
    </form>      
    </div>
    </div>


<?php require "../App/views/components/footer.php" ?>