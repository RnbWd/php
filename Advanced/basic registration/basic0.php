<?php 
  session_start(); 

  /*require("connect.php");

  if(isset($_SESSION['in']))
  {
    header("Locatoin: hedron.php");
  }*/
 
  ?>

<html>
  <head>
    <title>Registration Page</title>
    <script src="http://code.jquery.com/jquery-1.9.1.js"></script>

    <?php //var_dump($_SESSION); ?>

    <style>
     <?php 
      foreach($_SESSION['error'] as $key => $value)
        {
          if ($key != 'message')
          {
          echo $value;
          }
        }
      ?>
    </style>

    <script>
      $('document').ready(function(){
        $('span').hide();
      <?php 
        if (isset($_SESSION['error']))
        {
          foreach($_SESSION['error'] as $key => $value) 
          {                                 
        ?>
          $(<?= "'#".$key."'" ?>).show(); 
        <?php  
          }
          unset($_SESSION['error']);
        }

        if (isset($_SESSION['message']))
        { 
         ?>
          $('p').replaceWith(<?= "'<p>".$_SESSION['message']."</p>'" ?>); 
        <?php
          unset($_SESSION['message']);
        } 
         ?>
      });
    </script>
  </head>

  <body>

    <div id="login">
      <h1>Login</h1>

      <form action="basic1.php" method="post">
        <input type="hidden" name = "action" value = "login" />
        <input type="text" name="email" placeholder="Email address" />
        <input type="password" name="password" placeholder="Password" />
        <input type="submit" value="Login" />
      </form>
    </div>

    <div id = "registration">
      <h1>Registration</h1>
      <p>Please fill out the form below with your information (* are fields that are required)</p>

      <form action="basic1.php" method="post">
        <input type="hidden" name="action" value="register" />
        Email:<input type="text" name="email" placeholder="enter email address" />*<span id="email">this is blank</span><br>
        First Name: <input type="text" name="first" placeholder="enter first name" />*<span id="first">try again, only use letters</span><br>
        Last Name: <input type="text" name="last" placeholder="enter last name" />*<span id="last">try again, only use letters</span><br>
        Password:<input type="password" name="password" placeholder="password" />*<span id="password">password must contain at least 6 characters</span><br>
        Confirm password:<input type="password" name="confirm" placeholder="password" />*<span id="confirm">this doesn't match the password above</span><br>
        Birthday: <input type="date" name="bday"><br>
        <input type="submit" value="Submit" />
      </form>
    </div>
    <?php 

    session_unset(); ?>
  </body>
</html>