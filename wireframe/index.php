<!doctype html>
<html>
  <head>
    <title>Timesheet</title>
    <link rel="stylesheet" href="css/main.css">
    <!-- jQuery, jQuery UI -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
    <!-- Application scripts -->
    <script src="application/script.js"></script>
    <script src="application/min/draggable-min.js"></script>
  </head>
  <body>
    <div id="page">

      <div class="outer-container">
        <h1>Timesheet</h1>

        <div class="sheet">
          <h2>Entries for <?php print date('M j, Y');?></h2>

          <div class="time-entry">
            <h3 class="entry-title">TICKET-31</h3>
            <div class="timelog">
              <!-- our 8 blocks of 4 fifteen minute bubbles goes here -->
              <div class="hour">
                <span class="quarter-hour"></span>
                <span class="quarter-hour"></span>
                <span class="quarter-hour"></span>
                <span class="quarter-hour"></span>
              </div>
              <div class="hour">
                <span class="quarter-hour"></span>
                <span class="quarter-hour"></span>
                <span class="quarter-hour"></span>
                <span class="quarter-hour"></span>
              </div>
              <div class="hour">
                <span class="quarter-hour"></span>
                <span class="quarter-hour"></span>
                <span class="quarter-hour"></span>
                <span class="quarter-hour"></span>
              </div>
              <div class="hour">
                <span class="quarter-hour"></span>
                <span class="quarter-hour"></span>
                <span class="quarter-hour"></span>
                <span class="quarter-hour"></span>
              </div>
              <div class="hour">
                <span class="quarter-hour"></span>
                <span class="quarter-hour"></span>
                <span class="quarter-hour"></span>
                <span class="quarter-hour"></span>
              </div>
              <div class="hour">
                <span class="quarter-hour"></span>
                <span class="quarter-hour"></span>
                <span class="quarter-hour"></span>
                <span class="quarter-hour"></span>
              </div>
              <div class="hour">
                <span class="quarter-hour"></span>
                <span class="quarter-hour"></span>
                <span class="quarter-hour"></span>
                <span class="quarter-hour"></span>
              </div>
              <div class="hour">
                <span class="quarter-hour"></span>
                <span class="quarter-hour"></span>
                <span class="quarter-hour"></span>
                <span class="quarter-hour"></span>
              </div>
            </div>
            <label for="description">description</label>
            <input type="text" name="description" class="entry-description" placeholder="description" size="70">
          </div>
          <a href="#" class="add-entry-link">Add another entry</a>
        </div>

        <div class="jira-list">
          <h2>Jira issues</h2>
          <ul>
            <li><a href="#">JIRATICKET-35</a></li>
            <li><a href="#">JIRATICKET-35</a></li>
            <li><a href="#">JIRATICKET-35</a></li>
            <li><a href="#">JIRATICKET-35</a></li>
            <li><a href="#">JIRATICKET-35</a></li>
          </ul>
          <p class="help">Drag issues onto the timesheet to start logging time to a new entry</p>
          <section class="jql-search">
            <input type="text" name="jql-statement" placeholder="Enter JQL statement" size="40" />
            <input type="submit" value="Go" />
          </section>
        </div>

        <button class="save-sheet">Save time</button>
      </div>
    </div>
  </body>
</html>