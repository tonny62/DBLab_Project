<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>myHomework-Homeworks</title>
    <link rel="stylesheet" href="css/master.css">
  </head>
  <body>
    <div id="header">
      <p id="header_text">myHomework Mini Project</p>
    </div>
    <div id="menu">
      <ul>
        <li><a href="homework.php" id="menu_text" class="this_page">Homeworks</a></li>
        <li><a href="projects.php" id="menu_text">Projects</a></li>
        <li><a href="timetable.php" id="menu_text">Class Timetable</a></li>
        <li id="border_right"><a href="notes.php" id="menu_text">Notes</a></li>
        <li id="logout"><a href="index.php" id="menu_text">Log out</a></li>
      </ul>
    </div>
    <div class="clear"></div>
    <div id="container">
      <div id="table_wrapper">
        <table class="timetable">
            <tr>
              <th>no.</th>
              <th>Name</th>
              <th>Subject</th>
              <th>Deadline</th>
              <th>Status</th>
            </tr>
            <?php
              for ($i=1; $i <= 15; $i++) {
                echo "
                  <tr>
                    <td>{$i}</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                ";
              }
             ?>
        </table>
      </div>
      </div>
        </body>
</html>
