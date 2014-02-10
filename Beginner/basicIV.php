<?php 

function get_max_and_min($input)
{
  $max = $input[0];
  $min = $input[0];

  for ($i=0; $i < count($input) ; $i++) { 
    if($input[$i] >= $max)
    {
      $max = $input[$i];
    }
    else if($input[$i] <= $min)
    {
      $min = $input[$i];
    }
  }
  return $output = array(
    'max' => $max,
    'min' => $min
  );
}
$sample = array( 135, 2.4, 2.67, 1.23, 332, 2, 1.02); 
$result = get_max_and_min($sample); 
var_dump($result); 


 ?>