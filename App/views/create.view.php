<?php require "../App/views/components/head.php" ?>
<?php require "../App/views/components/navbar.php" ?>
    <h1>Create</h1>
    <form method="POST">
        <label>Name:
            <input name="name" value="<?= $_POST["name"] ?? '' ?>">
        </label>
        <label>Description:
            <input name="description" value="<?= $_POST["description"] ?? '' ?>">
        </label>
        <label>Due date:
            <input type="date" name="due" value="<?= $_POST["due"] ?? '' ?>">
        </label>
        <button>Create</button>
    </form>
<?php require "../App/views/components/footer.php" ?>