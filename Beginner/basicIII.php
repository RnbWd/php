<?php 

$head = 0;
$tail = 0;

for ($i=1; $i < 5001; $i++) 
{ 
  $coin = rand(0,1);

  echo "Attempt #" . $i . ": Throwing a coin... ";

  if($coin==0)
  {
    echo "It's a head! ";
    $head++;
  }
  else
  {
    echo "It's a tail! ";
    $tail++;
  }
  echo "Got " . $head . "head(s) so far and " . $tail . "tails(s) so far <br>";
}


 ?>