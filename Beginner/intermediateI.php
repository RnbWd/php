<?php 
  
function draw_stars($num)
{
  for ($i=0; $i < count($num) ; $i++) 
  { 
    if (is_int($num[$i]))
    {
      for ($j=0; $j < $num[$i] ; $j++) 
      { 
        echo "*";
      }
    } else if (is_string($num[$i]))
    {
      for ($j=0; $j < strlen($num[$i]); $j++) 
      { 
        echo strtolower($num[$i][0]);
      }
    }
    echo "<br>";
  }
};

$x = array(4, 6, 1, 3, 5, 7, 25);
draw_stars($x);
$y = array(4, "Tom", 1, "Michael", 5, 7, "Jimmy Smith");
draw_stars($y);

 ?>