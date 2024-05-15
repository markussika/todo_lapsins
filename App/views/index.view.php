<?php require "../App/views/components/head.php" ?>
<?php require "../App/views/components/navbar.php" ?>


<?php if(!empty($todos)){ ?>
<table>
  <thead>
    <tr>
      <th>Name</th>
      <th>Description</th>
      <th>Due by</th>
      <th>Completed</th>
    </tr>
  </thead>
  <tbody>
      <?php foreach ($todos as $todo) { ?>
          <tr>
              <td>
        <a href="/show?id=<?= $todo["id"] ?>"><?= $todo["name"] ?>
        </a></td>
              <td><?= $todo["description"] ?></td>
              <td><?= $todo["due"] ?></td>
              <td><?= $todo["completed"] ?></td>
          </tr>
      <?php } ?>
  </tfoot>
</table>
<?php } else { ?>
    <p>NO TODOS</p>
<?php } ?>
<?php require "../App/views/components/footer.php" ?>
