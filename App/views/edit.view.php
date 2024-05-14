<?php require "../App/views/components/head.php" ?>
<?php require "../App/views/components/navbar.php" ?>

    <div>
    <div>
    <h1 class="edit">Edit todo:</h1>
    <form method="POST">
        Name:
        <input type="hidden" name="id" value="<?= $todos["id"] ?>" />
            <input name='name' value="<?=($_POST["name"] ?? $todos["name"])?>" placeholder="name"/>
            <?php if(isset($errors["name"])) { ?> 
                <p class="invalid-data"><?= $errors["name"] ?></p>
            <?php } ?>
            Description:
            <input class="edit-input" name='description' value="<?=($_POST["description"] ?? $todos["description"])?>" placeholder="description"/>
            <?php if(isset($errors["description"])) { ?> 
                <p class="invalid-data"><?= $errors["description"] ?></p>
            <?php } ?>
        <label>Due date:
            <input type="date" name='due' value="<?=($_POST["due"] ?? $todos["due"])?>"/>
            <?php if(isset($errors["due"])) { ?>
                ><?= $errors["due"] ?>
            <?php } ?>
        </label>
        <button>Update</button>
        </form>
    </div>
</div>

<?php require "../App/views/components/footer.php" ?>