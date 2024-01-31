<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" href="styles/style.css">   
        <title>Meditatii</title>    
    </head>
    <body>
        <header> 
        <ul class="navbar">
		<li><a href="index.php"><img src="images/logo-no-background.png" alt="logo"></a></li>
		<li><a href="calendar.php" data-hover="Calendar" class="animated">Calendar</a></li>
		<li><a href="homework.php" data-hover="Teme" class="animated">Teme</a></li>
		<li><a href="search.php" data-hover="Cauta" class="animated">Cauta</a></li>
		<?php  if ($_SESSION['username']=='admin') : ?>
			<li><a href="meditatii.php" data-hover="Meditatii" class="animated">Meditatii</a></li>
        <?php endif ?>
		<?php  if ($_SESSION['username']!='admin') : ?>
			<li><a href="oferte.php" data-hover="Oferte" class="animated">Oferte</a></li>
        <?php endif ?>
		<!-- logged in user information -->
		<?php  if (isset($_SESSION['username'])) : ?>
			<li> <a href="index.php?logout='1'" data-hover="Logout" class="animated">Logout</a> </li>
        <?php endif ?>
    </ul>
        </header>
        <div id="calendar-container">
          <div id="header">
              <div id="monthDisplay"></div>
              <button id="backButton">Back</button>
              <button id="currentButton">Current</button>
              <button id="nextButton">Next</button>
          </div>
  
          <div id="weekdays">
              <div><b>Luni</b></div>
              <div><b>Marti</b></div>
              <div><b>Miercuri</b></div>
              <div><b>Joi</b></div>
              <div><b>Vineri</b></div>
              <div><b>Sambata</b></div>
              <div><b>Duminica</b></div>
          </div>
  
          <div id="calendar"></div>
      </div>
  
      <div id="newEventModal">
          <h2>New Event</h2>
          <form action="insert.php" method="POST">
            <input id="eventTitleInput" name="eventTitle" placeholder="Event Title">
            <input id="eventTimeInput" name="eventTime" placeholder="Ora">
            <input id="studentNameInput" name="studentName" placeholder="Elev">
            <button id="saveButton">Save</button>
            <button id="cancelButton">Cancel</button>
          </form>
          
      </div>
  
      <div id="deleteEventModal">
          <!-- <h2>Event</h2> -->
          <h2 id="eventText">Event</h2>
          <button id="deleteButton">Delete</button>
          <button id="closeButton">Close</button>
      </div>
  
      <div id="modalBackDrop"></div>
        <footer>
            <p>
                Footer
            </p>
        </footer>
        <script src="scripts/calendar.js"></script>
    </body>
</html>