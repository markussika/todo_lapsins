<?php require "../App/views/components/head.php" ?>
<?php if (isset($_SESSION["user"]) ){
     require "../App/views/components/navbar.auth.php";
    } else {
     require "../App/views/components/navbar.guest.php";
     } ?>

<div class="wrapper">
<div class="index-wrapper">
    <div>
        <form method="POST">
            <input name="search" placeholder="Search todos">
            <button>Search</button>
        </form>
    </div>
    <?php 
    if(!empty($_POST["search"])) {
        $todos = $model->search();
    } ?>
<?php if(!empty($todos)){ ?>
<table>
  <thead>
    <tr class="index-tr">
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
                <div class="td-wrapper"><?= $todo["username"] ?></div>
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
                          <input type="hidden" value="<?= $todo["id"] ?>" name="todo-id">
                          <p><?= $todo["completed"] == 1 ? "completed" : "Not completed" ?></p>
                          <p class="click-top-change-text">Click to change</p>               
                          <input type="checkbox" <?= $todo["completed"] == 1 ? 'checked' : '' ?> name="completed-checkbox" onchange="this.form.method='post'; this.form.submit()">
                      </form>
                </div>
                
            </td>
            <td class="index-end-div">
                <div class="actions-index td-wrapper index-end-div">
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
</div>
</div>
<?php require "../App/views/components/footer.php" ?>
