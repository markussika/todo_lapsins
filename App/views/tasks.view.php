<?php require "../App/views/components/head.php" ?>
<?php if (isset($_SESSION["user"]) ){
     require "../App/views/components/navbar.auth.php";
} else {
     require "../App/views/components/navbar.guest.php";
} ?>

<p>Hey</p>


<?php require "../App/views/components/footer.php" ?>