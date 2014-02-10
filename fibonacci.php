<?php 
session_start();

$a = $_SESSION['a'];
$b = $_SESSION['b'];
$c = $_SESSION['c'];


?>

<html>
<head>
  <title>Fibonacci</title>
</head>
<body>

  <form action = "get.php" method="get">
    <input type="hidden" name="fibs" />
    Number:<input type= "text" name = "a" />
    Number:<input type= "text" name = "b" />
    Series:<input type= "text" name = "c" />
    <input type = "submit" value = "run" />



  </form>

</body>
</html>




<?php

echo $a . " " . $b . " ";

for ($i= 0; $i < $c -2; $i++) { 

  $fibonacci = $a + $b;
  echo $fibonacci . " ";
  $a = $b;
  $b = $fibonacci;
}




 ?>