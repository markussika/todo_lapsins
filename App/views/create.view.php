<?php require "../App/views/components/head.php" ?>
<?php require "../App/views/components/navbar.php" ?>
    <h1>Create</h1>
    <form method="POST">
        <label>
            <input name="name" value="<?= $_POST["name"] ?? '' ?>">
        </label>
        <label>
            <input name="description" value="<?= $_POST["description"] ?? '' ?>">
        </label>
        <label>
            <input name="due" value="<?= $_POST["due"] ?? '' ?>">
        </label>
    </form>
<?php require "../App/views/components/footer.php" ?>