<?php
  session_start();
  require("connect.php");

  $query = "SELECT * FROM students;";

  $students = fetch_all($query);
 ?>

<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
  <title>Green Belt</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.js"></script>

  <script type="text/javascript">

  $(document).ready(function(){

    <?php 
      if (!isset($_SESSION['student_id']))
      {
     ?>

      $('#exam_table, #add_record').hide();

    <?php
      }
     ?>

  });

  </script>

</head>
<body>

  <div id="top_wrapper">

    <a href="process.php">Refresh Page</a>

    <h1>Welcome, Teacher!</h1>

    <form id="select_exams" name="select_exams" action="process.php" method="post">

      <input type="hidden" name="action" value="student">

      Select Student:
      <select id="select_student" name="select_student">

        <?php
          foreach($students as $student)
          {
            echo "<option value='".$student['id']."'>".$student['first_name']." ".$student['last_name']."</option>";
          }
         ?>

      </select>

      <input type="submit" value="Show Exam Record">

    </form>

  </div>

  <div id="exam_table">

  <?php 
    if (isset($_SESSION['message']))
    {
      echo "<p id='message'>".$_SESSION['message']."</p>";
    }

    if (isset($_SESSION['student_id']))
    {
      echo "<p>Exam Record for student id# ".$_SESSION['student_id']."</p>";
   ?>

      <table border="1">
        <tr>
          <th>Exam ID</th>
          <th>Subject</th>
          <th>Grade</th>
          <th>Status (Passed/Failed)</th>
          <th>Teacher's Notes</th>
        </tr>

  <?php 
      if (isset($_SESSION['records']))
      {
        foreach ($_SESSION['records'] as $record)
        {
          echo "<tr>
                  <td>".$record['id']."</td>
                  <td>".$record['subject']."</td>
                  <td>".$record['grade']."%</td>";

          if ($record['grade'] > 74)
          {
            echo "<td>Passed</td>";
          }
          else
          {
            echo "<td>Failed</td>";
          }
          echo "  <td>".$record['notes']."</td>
                </tr>";
        }
        echo "</table>";
      }
    }
    else
    {
      echo "<p id='message'>No Student Selected</p>";
    }
   ?>

  </div>

  <div id="add_record">

    <p>Add Record:</p>

    <form id="new_record" name="new_record" action="process.php" method="post">

    <?php 
      if (isset($_SESSION['student_id']))
      {
        echo "<input type='hidden' name='student' value='".$_SESSION['student_id']."'>";
      }
     ?>

      <input type="hidden" name="action" value="add_record">

      <p>Subject: <input type="text" name="subject" /></p>
      
      <p>Grade:   <select id="exam_score" name="exam_score">

        <?php
          for ($i=100; $i > 0; $i--) 
          { 
            echo "<option value='".$i."'>".$i."</option>";
          }
        ?>

      </select></p>

      <p>Teacher's Notes: </p>
      <textarea name = "notes" rows="4" cols="20"></textarea>

      <p><input type="submit" value="Add Record"/></p>

    </form>
  </div>
</body>
</html>