<?php require("include/header.php"); 
  //include() can also be used but it will not return an error if the file isn't found
  //you can also say include_once or require_once
?>

 <h1>This is the homepage</h1>

<?php

$str = 'David';

echo "David = " . md5('David') . "<br>";
echo "david = " . md5('david'). "<br>"; 


?>