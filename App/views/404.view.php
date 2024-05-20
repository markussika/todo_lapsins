<?php require "../App/views/components/head.php" ?>
<?php if (isset($_SESSION["user"]) ){
     require "../App/views/components/navbar.auth.php";
    } else {
     require "../App/views/components/navbar.guest.php";
     } ?>

<div class="error">
<p >Muļķis! Lapas nav</p>
<p >404</p>
</div>

<?php require "../App/views/components/footer.php" ?>
