<?php require "../App/views/components/head.php" ?>
<?php if (isset($_SESSION["user"]) ){
     require "../App/views/components/navbar.auth.php";
} else {
     require "../App/views/components/navbar.guest.php";
} ?>


<div class="calendar">
    <div class="days">
    <?php foreach ($groupedTodos as $dueDate => $todosOnDate) { 
        // Format the due date
        $dateObj = new DateTime($dueDate);
        $formattedDate = $dateObj->format('F j, Y');
    ?>
        <div class="day mon">
            <div class="events">
            <div class="date">
                <p class="date-num"><?= $formattedDate ?></p>
            </div>
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