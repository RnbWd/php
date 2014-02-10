<?php
  require("index_include/hedron_sql.php");
 ?>
<html>
<head>
  <meta charset="utf-8" />
  <title>Hedron</title>
  <link rel="stylesheet" type="text/css" href="index_include/hedronstyle.css">
  <link href='http://fonts.googleapis.com/css?family=Indie+Flower' rel='stylesheet' type='text/css'>
</head>
<body>
  <img src="images/geometry.jpg"/>
  <div id="heading">
    <h1>This is <?= $_SESSION['user']['first_name'] ." " . $_SESSION['user']['last_name']?>'s Hedron</h1>
    <p>Derived from the Ancient Greek 'hedra', meaning the geometric face of a regular solid ; throne</p>
  </div>
  <div id = "new_message">
    <form action="index_include/process.php" method="post">
    <p>New Message:</p>
    <input type="hidden" name="action" value="new_message" />
    <textarea name="newmessage" rows="4" cols="50" placeholder="Type Text HEre"></textarea>
    <p><input type="submit" value="Submit Message" /></p>
    </form>
  </div>
  <div id="messages">
<h2>Messages from the World Crystal:</h2>
  <?php 
    include("index_include/messages.php");
   ?>
</div>

<a href="index_include/process.php">Log Off</a>
</body>
</html>
  

 