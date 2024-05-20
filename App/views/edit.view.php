<?php require "../App/views/components/head.php" ?>
<?php if (isset($_SESSION["user"]) ){
     require "../App/views/components/navbar.auth.php";
    } else {
     require "../App/views/components/navbar.guest.php";
     } ?>

    <div>
    <div class="loginform">
    <h2 class="edit">Edit <?=($_POST["name"] ?? $todos["name"])?></h2>
    <form method="POST">
        Name:
        <input type="hidden" name="id" value="<?= $todos["id"] ?>" />
            <input type="text" name='name' value="<?=($_POST["name"] ?? $todos["name"])?>" placeholder="name"/>
            <?php if(isset($errors["name"])) { ?> 
                <p class="invalid-data"><?= $errors["name"] ?></p>
            <?php } ?>
            Description:
            <input type="text" class="edit-input" name='description' value="<?=($_POST["description"] ?? $todos["description"])?>" placeholder="description"/>
            <?php if(isset($errors["description"])) { ?> 
                <p class="invalid-data"><?= $errors["description"] ?></p>
            <?php } ?>
        <label>Due date:
            <input type="date" name='due' value="<?=($_POST["due"] ?? $todos["due"])?>"/>
            <?php if(isset($errors["due"])) { ?>
                ><?= $errors["due"] ?>
            <?php } ?>
        </label>
        <input type="submit" name="Update" value="Update">
        </form>
    </div>
</div>

<?php require "../App/views/components/footer.php" ?>