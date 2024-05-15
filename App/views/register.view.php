<?php require "../App/views/components/head.php" ?>
<?php require "../App/views/components/navbar.php" ?>


<form method="POST">
<h3>Register</h3>
  <label>
    username:
    <input name="username" type="username" placeholder="Create username" id="username"/>
  </label>
  <?php if(isset($errors["username"])) {?>
    <p><?= $errors["username"] ?></p>
  <?php } ?>
  <label>
    Password <span class="explanation">(jābūt 8 rakstzīmēm, 1 lielam, 1 mazam un 1 īpaša simbolam un 1 ciparam, good luck)</span>   :
    <input name="password" type="password" placeholder="Create password" id="password"/>
  </label>
  <?php if(isset($errors["password"])) {?>
    <p><?= $errors["password"] ?></p>
  <?php } ?>
  <button>Register</button>
</form>


<?php require "../App/views/components/footer.php" ?>