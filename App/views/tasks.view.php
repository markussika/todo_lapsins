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
    <!-- <div class="day mon">
      <div class="date">
        <p class="date-num">9</p>
        <p class="date-day">Mon</p>
      </div>
      <div class="events">
        <div class="event start-2 end-5 securities">
          <p class="title">Securities Regulation</p>
          <p class="time">2 PM - 5 PM</p>
        </div>
      </div>
    </div>
    <div class="day mon">
      <div class="date">
        <p class="date-num">9</p>
        <p class="date-day">Mon</p>
      </div>
      <div class="events">
        <div class="event start-2 end-5 securities">
          <p class="title">Securities Regulation</p>
          <p class="time">2 PM - 5 PM</p>
        </div>
      </div>
    </div>
    <div class="day mon">
      <div class="date">
        <p class="date-num">9</p>
        <p class="date-day">Mon</p>
      </div>
      <div class="events">
        <div class="event start-2 end-5 securities">
          <p class="title">Securities Regulation</p>
          <p class="time">2 PM - 5 PM</p>
        </div>
      </div>
    </div>
    <div class="day tues">
      <div class="date">
        <p class="date-num">12</p>
        <p class="date-day">Tues</p>
      </div>
      <div class="events">
        <div class="event start-10 end-12 corp-fi">
          <p class="title">Corporate Finance</p>
          <p class="time">10 AM - 12 PMPMPMPMPMPMPMPMPMPMPMPMPMPMPMPMPMPMPMPMPMPMPMPMPMPMPMPMPMPM</p>
        </div>
        <div class="event start-1 end-4 ent-law">
          <p class="title">Entertainment Law</p>
          <p class="time">1PM - 4PM</p>
        </div>
      </div>
    </div>
    <div class="day wed">
      <div class="date">
        <p class="date-num">11</p>
        <p class="date-day">Wed</p>
      </div>
      <div class="events">
        <div class="event start-12 end-1 writing">
          <p class="title">Writing Seminar</p>
          <p class="time">hey</p>
        </div>
        <div class="event start-2 end-5 securities">
          <p class="title">Securities Regulation</p>
          <p class="time">2 PM - 5 PM</p>
        </div>
      </div>
    </div>
    <div class="day thurs">
      <div class="date">
        <p class="date-num">12</p>
        <p class="date-day">Thurs</p>
      </div>
      <div class="events">
        <div class="event start-10 end-12 corp-fi">
          <p class="title">Corporate Finance</p>
          <p class="time">10 AM - 12 PM</p>
        </div>
        <div class="event start-1 end-4 ent-law">
          <p class="title">Entertainment Law</p>
          <p class="time">1PM - 4PM</p>
        </div>
      </div>
    </div>
    <div class="day fri">
      <div class="date">
        <p class="date-num">13</p>
        <p class="date-day">Fri</p>
      </div>
      <div class="events">
      </div>
    </div> -->
  <!-- </div>
</div> -->


<?php require "../App/views/components/footer.php" ?>