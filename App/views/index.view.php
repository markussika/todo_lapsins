<?php require "../App/views/components/head.php" ?>
<?php require "../App/views/components/navbar.php" ?>


<?php if(!empty($todos)){ ?>
<table>
  <thead>
    <tr>
      <th>Name</th>
      <th>Description</th>
      <th>Due by</th>
      <th>completed</th>
      <th>Actions</th>
    </tr>
  </thead>
  <tbody>
      <?php foreach ($todos as $todo) { ?>
          <tr>
              <td class="<?= $todo["completed"] == 1 ? "com" : "not-com" ?>"><div><?= $todo["name"] ?></div></td>
              <td><div><?= $todo["description"] ?></div></td>
              <td><div><?= $todo["due"] ?></div></td>
              <td><div><?= $todo["completed"] == 1 ? "completed" : "Not completed" ?></div></td>
              <td><div class="actions-index">
              <form action="/completed-checkbox" method="POST">
                <input type="hidden" value="<?= $todo["id"] ?>" name="todo-id" >
                <label>
                  Status:
                  <input type="checkbox" <?= $todo["completed"] == 1 ? 'checked' : '' ?> name="completed-checkbox" onchange="this.form.method='post'; this.form.submit()" >
                </label>
              </form>
              <form action="/edit">
                  <Button name="id" value="<?= $todo['id'] ?>" class="edit-but">Edit</Button>
              </form>
              <form class="delete-form" method="POST" action="/delete">
                  <button name="id" value="<?= $todo["id"] ?>" class="delete-but">Delete</button>
              </form>
            </div></td>
          </tr>
      <?php } ?>
  </tfoot>
</table>
<?php } else { ?>
    <p>NO TODOS</p>
<?php } ?>
<?php require "../App/views/components/footer.php" ?>
