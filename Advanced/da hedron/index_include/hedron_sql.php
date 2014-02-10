<?php
  session_start();

  require("connect.php");

  if(!isset($_SESSION['logged_in']))
  {
    header("Location: ../index.php");
  } 
  //var_dump($_SESSION);
  $query = "SELECT messages.users_id, first_name, last_name, messages.id, message, messages.created_at FROM users LEFT JOIN messages ON users.id = messages.users_id WHERE messages.id IS NOT NULL ORDER BY messages.created_at DESC;";
  $messages = fetch_all($query); 
  //var_dump($messages);
  $query = "SELECT first_name, last_name, messages.id, comment, comments.created_at FROM users LEFT JOIN comments ON users.id = comments.users_id LEFT JOIN messages ON comments.messages_id = messages.id WHERE comments.id IS NOT NULL ORDER BY comments.created_at ASC";
  $comments = fetch_all($query); 
  //var_dump($comments);
 ?>