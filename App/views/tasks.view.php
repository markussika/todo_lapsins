<?php require "../App/views/components/head.php" ?>
<?php if (isset($_SESSION["user"]) ){
     require "../App/views/components/navbar.auth.php";
} else {
     require "../App/views/components/navbar.guest.php";
} ?>


<div class="calendar">
    <div class="days">
    <?php foreach ($groupedTodos as $dueDate => $todosOnDate) { ?>
        <div class="day mon">
            <div class="date">
                <p class="date-num"><?= $dueDate ?></p>
            </div>
            <div class="events">
            <?php foreach ($todosOnDate as $todoE) { ?>
                <div class="event start-2 end-5 securities">
                    <p class="title"><?= $todoE["name"] ?></p>
                    <p class="time"><?= $todoE["description"] ?></p>
                </div>
            <?php } ?>
            </div>
        </div>
    <?php } ?>
    </div>
</div>


<?php require "../App/views/components/footer.php" ?>