<?php 
  require("connectiondemo.php");

  $first_name = "Potato";
  $last_name = "Joe";

  //$query = "INSERT INTO users (first_name, last_name, created_at) VALUES ('{$first_name}', '{$last_name}', NOW())";

  //mysql_query($query);
 // $query = "DELETE FROM users WHERE id =5";
 // mysql_query($query);


  $hello = "SELECT * FROM users ORDER BY id ASC";

  $users = fetch_all($hello);

  //var_dump($users);

  foreach($users as $user)
  {
    echo $user['id'] . "-". $user['first_name'] . " " . $user["last_name"] . "<br>";
  }

  $song = 'Cause were living in a world of fools Breaking us down When they all should let us be We belong to you and me'; 

  $new_song = explode(' ', $song); 
  echo $new_song;

 ?>