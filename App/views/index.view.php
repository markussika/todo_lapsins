<?php require "../App/views/components/head.php" ?>
<?php require "../App/views/components/navbar.php" ?>


<?php if(!empty($todos)){ ?>
<table>
  <thead>
    <tr>
      <th>Name</th>
      <th>Created By</th>
      <th>Due by</th>
      <th>completed</th>
      <th>Actions</th>
    </tr>
  </thead>
  <tbody>
      <?php foreach ($todos as $todo) { ?>
        <tr>
            <td class="<?= $todo["completed"] == 1 ? "com" : "not-com" ?>">
                <div class="td-wrapper"><?= $todo["name"] ?></div>
            </td>
            <td>
                <div class="td-wrapper"><?= $todo["user_id"] ?></div>
            </td>
            <td class="td-div">
                <div class="td-wrapper">
                    <?= $todo["due"] ?>
                    <div class="p-wrapper">
                        <p class="p-description"><p class="description-title">Description</p><?= $todo["description"] ?></p>
                    </div>
                </div>
            </td>
            <td>
                <div class="td-wrapper">
                      <form action="/completed-checkbox" method="POST" class="checkbox-form">
                          <input type="hidden" value="<?= $todo["id"] ?>" name="todo-id"><?= $todo["completed"] == 1 ? "completed" : "Not completed" ?>                
                          <input type="checkbox" <?= $todo["completed"] == 1 ? 'checked' : '' ?> name="completed-checkbox" onchange="this.form.method='post'; this.form.submit()">
                      </form>
                </div>
                
            </td>
            <td>
                <div class="actions-index td-wrapper">
                    <!-- <form action="/completed-checkbox" method="POST">
                        <input type="hidden" value="<?= $todo["id"] ?>" name="todo-id">
                        <label>
                            Status:
                            <input type="checkbox" <?= $todo["completed"] == 1 ? 'checked' : '' ?> name="completed-checkbox" onchange="this.form.method='post'; this.form.submit()">
                        </label>
                    </form> -->
                    <form action="/edit">
                        <button name="id" value="<?= $todo['id'] ?>" class="edit-but">Edit</button>
                    </form>
                    <form class="delete-form" method="POST" action="/delete">
                        <button name="id" value="<?= $todo["id"] ?>" class="delete-but">Delete</button>
                    </form>
                </div>
            </td>
        </tr>
      <?php } ?>
  </tfoot>
</table>
<?php } else { ?>
    <p>NO TODOS</p>
<?php } ?>
<?php require "../App/views/components/footer.php" ?>
