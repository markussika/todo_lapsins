<?php require "../App/views/components/head.php" ?>
<?php require "../App/views/components/navbar.php" ?>


<h1><?= htmlspecialchars($todos["name"]) ?></h1>
<p><?= htmlspecialchars($todos["description"]) ?></p>

<a href="/edit?id=<?= $todos["id"] ?>"><button>Edit</button></a>
<form class="delete-form" method="POST" action="/delete">
            <button class="delete" name="id" value="<?= $todos["id"] ?>">Delete</button>
        </form>



        <?php require "../App/views/components/footer.php" ?>