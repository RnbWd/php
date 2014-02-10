<html>
<head>
  <title>IntermediateII</title>
  <link rel="stylesheet" type="text/css" href="iII.css">
</head>
<body>
<?php 

echo "<table border='1'><tr><td></td>";

for ($i=1; $i < 10; $i++) 
{ 
  echo "<td><strong>" . $i . "</strong></td>";
}
echo "</tr>";


for ($i=1; $i < 10; $i++) 
{ 
  echo "<tr><td><strong>" . $i . "</strong></td>";

  for ($j=$i; $j <= $i*9; $j+=$i) 
  { 
    echo "<td>" . $j . "</td>";
  }
  echo "</tr>";
}

 ?>
</body>
</html>