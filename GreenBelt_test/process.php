<?php 
  session_start();
  require("connect.php");

  if(isset($_POST['action']) and $_POST['action'] == 'student')
  {
    selectStudent();
  }
  else if(isset($_POST['action']) and $_POST['action'] == 'add_record')
  {
    addRecord();
  }
  else
  {
    session_destroy();
    header("Location: index.php");
  }

  function selectStudent()
  {
    $query = "SELECT * FROM exam_record WHERE students_id = '{$_POST['select_student']}';";

    $_SESSION['records'] = fetch_all($query);

    $_SESSION['student_id'] = $_POST['select_student'];

    header("Location: index.php");
  }

  function addRecord()
  {
    if (isset($_POST['student']))
    {
      $query = "INSERT INTO exam_record (students_id, subject, grade, notes) VALUES ('{$_POST['student']}', '{$_POST['subject']}', '{$_POST['exam_score']}', '{$_POST['notes']}');";

      mysql_query($query);

      $_SESSION['message'] = "Action Success!";

      $query = "SELECT * FROM exam_record WHERE students_id = '{$_POST['student']}';";

      $_SESSION['records'] = fetch_all($query);

      header("Location: index.php");
    }
    else
    {
      $_SESSION['message'] = "Error: no student selected";

      header("Location: index.php");
    }

  }

 ?>