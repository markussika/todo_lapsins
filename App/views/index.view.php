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
              <td><?= $todo["name"] ?></td>
              <td><?= $todo["description"] ?></td>
              <td><?= $todo["due"] ?></td>
              <td><?= $todo["completed"] == 1 ? "completed" : "Not completed" ?></td>
              <td><div>
              <form action="/completed-checkbox" method="POST">
                <input type="hidden" value="<?= $todo["id"] ?>" name="todo-id" >
                <input type="checkbox" <?= $todo["completed"] == 1 ? 'checked' : '' ?> name="completed-checkbox" onchange="this.form.method='post'; this.form.submit()" >
              </form>
              <form class="delete-form" method="POST" action="/delete">
                  <button class="delete" name="id" value="<?= $todo["id"] ?>">Delete</button>
              </form>
              <form action="/edit">
                  <Button name="id" value="<?= $todo['id'] ?>">edit</Button>
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
