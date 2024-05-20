<?php require "../App/views/components/head.php" ?>
<?php if ($_SESSION["user"] = true ){
     require "../App/views/components/navbar.auth.php";
    } else {
     require "../App/views/components/navbar.guest.php";
     } ?>


<div class="loginform">
    <h2>Create</h2>
    <form method="POST">
        <label>Name:
            <input type="text" placeholder="Name" name="name" value="<?= $_POST["name"] ?? '' ?>">
            <?php if(isset($errors["name"])) {?>
                <div><p class="error"><?= $errors["name"]?></p></div>
            <?php } ?>
        </label>
        <label>Description:
            <input type="text" placeholder="Description" name="description" value="<?= $_POST["description"] ?? '' ?>">
            <?php if(isset($errors["description"])) {?>
                <div><p class="error"><?= $errors["description"]?></p></div>
            <?php } ?>
        </label>
        <label>Due date:
            <input type="date" name="due" value="<?= $_POST["due"] ?? '' ?>">
            <?php if(isset($errors["due"])) {?>
                <div><p class="error"><?= $errors["due"]?></p></div>
            <?php } ?>
        </label>
        <input type="submit" name="submit" value="Submit">
    </form>
    </div>
<?php require "../App/views/components/footer.php" ?>