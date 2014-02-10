<?php 
  
$states = array('CA', 'WA', 'VA', 'UT', 'AZ'); 

function dropdown_for($array)
{
  echo "<select>";

  for ($i=0; $i < 5; $i++) 
  { 
    echo "<option>" . $array[$i] . "</option>";
  }
  echo "</select>";
}

function dropdown_foreach($array)
{
  echo "<select>";

  foreach ($array as $state)
  {
    echo "<option>" . $state . "</option>";
  }
  echo "</select>";
}

function dropdown_add($array)
{
  array_push($array, "NJ", "NY", "DE");

  echo "<select>";

  foreach ($array as $state)
  {
    echo "<option>" . $state . "</option>";
  }
  echo "</select>";
}

dropdown_for($states);
dropdown_foreach($states);
dropdown_add($states);

?>

