<?php 

  session_start();

  

  if($_POST['email'] !='' AND $_POST['password'] != '')
  {
    $_SESSION['message'] = "Logging you in";
     
  }
  else
  {
   $_SESSION['message'] = "Error";
  }

  header("Location: form.php");

  //var_dump($_SESSION);




//get/$_GET can be used to display info in URL
  var_dump($_POST);
 ?>