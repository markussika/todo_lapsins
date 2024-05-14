<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1><?= htmlspecialchars($catalog["name"]) ?></h1>

<a href="/edit?id=<?= $catalog["id"] ?>"><button>Edit</button></a>
<form class="delete-form" method="POST" action="/delete">
            <button class="delete" name="id" value="<?= $catalog["id"] ?>">Delete</button>
        </form>


</body>
</html>