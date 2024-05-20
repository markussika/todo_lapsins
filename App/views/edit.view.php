<?php require "../App/views/components/head.php" ?>
<?php if (isset($_SESSION["user"]) ){
     require "../App/views/components/navbar.auth.php";
    } else {
     require "../App/views/components/navbar.guest.php";
     } ?>

<div class="form-wrapper">
    <div class="loginform">
    <h2 class="edit">Edit <?=($_POST["name"] ?? $todos["name"])?></h2>
    <form method="POST">
        Name:
        <input type="hidden" name="id" value="<?= $todos["id"] ?>" />
            <input type="text" name='name' value="<?=($_POST["name"] ?? $todos["name"])?>"/>
            <?php if(isset($errors["name"])) { ?> 
                <div><p class="error"><?= $errors["name"]?></p></div>
            <?php } ?>
            Description:
            <input type="text" name='description' value="<?=($_POST["description"] ?? $todos["description"])?>"/>
            <?php if(isset($errors["description"])) { ?> 
                <div><p class="error"><?= $errors["description"]?></p></div>
            <?php } ?>
        <label>Due date:
            <input type="date" name='due' value="<?=($_POST["due"] ?? $todos["due"])?>"/>
            <?php if(isset($errors["due"])) { ?>
                <div><p class="error"><?= $errors["due"]?></p></div>
            <?php } ?>
        </label>
        <input type="submit" name="Update" value="Update">
        </form>
    </div>
</div>
<?php require "../App/views/components/footer.php" ?>