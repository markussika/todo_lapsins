<?php require "../App/views/components/head.php" ?>
<?php require "../App/views/components/navbar.php" ?>
    <h1>Create</h1>
    <form method="POST">
        <label>Name:
            <input name="name" value="<?= $_POST["name"] ?? '' ?>">
            <?php if(isset($errors["name"])) {?>
                <div><p class="error"><?= $errors["name"]?></p></div>
            <?php } ?>
        </label>
        <label>Description:
            <input name="description" value="<?= $_POST["description"] ?? '' ?>">
            <?php if(isset($errors["description"])) {?>
                <div><p class="error"><?= $errors["name"]?></p></div>
            <?php } ?>
        </label>
        <label>Due date:
            <input type="date" name="due" value="<?= $_POST["due"] ?? '' ?>">
            <?php if(isset($errors["due"])) {?>
                <div><p class="error"><?= $errors["name"]?></p></div>
            <?php } ?>
        </label>
        <button>Create</button>
    </form>
<?php require "../App/views/components/footer.php" ?>