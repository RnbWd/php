<?php 
  session_start(); 
  require("index_include/connect.php");

  if(isset($_SESSION['in']))
  {
    header("Location: hedron.php");
  }
 ?>
<html>
  <head>
    <title>Login/Registration Page</title>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="index_include/jquery-ui-1.10.3/themes/base/jquery-ui.css">
    <link rel="stylesheet" type="text/css" href="index_include/style.css.php">
    <link href='http://fonts.googleapis.com/css?family=Kelly+Slab' rel='stylesheet' type='text/css'>
    <script type="text/javascript" src="index_include/jquery-2.0.3.js"></script>
    <script type="text/javascript" src="index_include/jquery-ui-1.10.3/ui/jquery-ui.js"></script>
    <style>
    <?php
      include("index_include/style.css.php");
     ?>
    </style>
    <script>
    <?php
      include("index_include/jquery.php");
     ?>
    </script>
  </head>

  <body>
    <h1><img src="images/sacredgeo1.jpg"/>Welcome to the Enchiridon<img src="images/sacredgeo1.jpg"/></h1>
    <h4>Your Portal into the World Crystal</h4>
    <div id="main">
      <h3>Login</h3>
      <div>
        <p>Please enter your information:</p>
        <form action="index_include/process.php" method="post">
          <input type="hidden" name = "action" value = "login" />
          <input type="email" name="email_login" placeholder="Email address" />
          <input type="password" name="password_login" placeholder="Password" />
          <input type="submit" value="Login" />
        </form>
     </div>
      <h3>Registration</h3>
      <div>
      <p>Please fill out the form below with your information (* fields are required)</p>
      <form action="index_include/process.php" method="post">
        <input type="hidden" name="action" value="register" />
        Email:<input type="email" name="email" placeholder="enter email address" />*<span id="email"></span><br>
        First Name: <input type="text" name="first" placeholder="enter first name" />*<span id="first"></span><br>
        Last Name: <input type="text" name="last" placeholder="enter last name" />*<span id="last"></span><br>
        Password:<input type="password" name="password" placeholder="password" />*<span id="password"></span><br>
        Confirm password:<input type="password" name="confirm" placeholder="password" />*<span id="confirm"></span><br>
        <input type="submit" value="Submit" />
      </form>
      </div>
    </div>
  </body>
</html>