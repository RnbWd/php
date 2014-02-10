<html>
<head>
  <title>Checker Board</title>
  <link rel="stylesheet" type="text/css" href="aII.css">
</head>
<body>

  <table>
 <?php
  $color = 1;
  for ($i=0; $i < 8; $i++) 
  { 
    echo "<tr><td class = 'a" . $i%2 . "'> </td>";
    for ($j=0; $j < 7; $j++) 
    { 
      echo"<td class ='a" . $color%2 . "'> </td>";
      $color++;
    }
    echo "</tr>";
  } ?>

  </table>


</body>
</html>


