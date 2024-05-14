<?php require "../App/views/components/head.php" ?>
<?php require "../App/views/components/navbar.php" ?>


<table>
  <thead>
    <tr>
      <th>Name</th>
      <th>Description</th>
      <th>Due by</th>
    </tr>
  </thead>
  <tbody>
      <?php foreach ($todos as $todo) { ?>
        <tr>
            <td><?= $todo["name"] ?></td>
            <td><?= $todo["description"] ?></td>
            <td><?= $todo["due"] ?></td>
        </tr>
      <?php } ?>
  </tfoot>
</table>

<?php require "../App/views/components/footer.php" ?>
