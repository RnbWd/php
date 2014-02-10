<html>
<head>
  <title>Advanced I</title>
  <link rel="stylesheet" type="text/css" href="ai.css">
</head>
<body>
<?php 
    function table($inputs)
    { ?>
    <table border='1'>
      <tr>
        <td><strong>User #</strong></td>
        <td><strong>First Name</strong></td>
        <td><strong>Last Name</strong></td>
        <td><strong>Full Name</strong></td>
        <td><strong>Full Name in upper case</strong></td>
        <td><strong>Length of name</strong></td>
      </tr>
<?php  $num = 1;
    
    for ($i=0; $i < count($inputs); $i++) 
    { 
      if ($num % 5 == 0)
      {
        echo "<tr class = 'black'>";
      }
      else
      {
        echo "<tr>";
      }
      
 ?>
        <td><strong><?= $num++ ?></strong></td>
<?php
      foreach($inputs[$i] as $key=>$value)
      { 
        if ($key == 'first_name')
        {
          $first = $value;
        }
        else if ($key == 'last_name')
        {
          $last = $value;
        }
      }
 ?>     <td><?= $first ?></td>
        <td><?= $last ?></td>
        <td><?= $first ." ". $last ?></td>
        <td><?= strtoupper($first ." ". $last) ?></td>
        <td><?= strlen($first ." ". $last) ?></td>
      </tr>
<?php
    }
 ?> </table>
<?php
  }
    
  $users = array( 
   array('first_name' => 'Michael', 'last_name' => 'Choi'),
   array('first_name' => 'John', 'last_name' => 'Supsupin'),
   array('first_name' => 'Mark', 'last_name' => 'Guillen'),
   array('first_name' => 'KB', 'last_name' => 'Tonel'), 
   array('first_name' => 'David', 'last_name' => 'Harris'),
   array('first_name' => 'Karen', 'last_name' => 'Toon'), 
   array('first_name' => 'Kumar', 'last_name' => 'Davis'), 
   array('first_name' => 'Jebediah', 'last_name' => 'Jones'), 
   array('first_name' => 'Michaela', 'last_name' => 'Fuchs'), 
   array('first_name' => 'Potato', 'last_name' => 'Cook'), 
   array('first_name' => 'George', 'last_name' => 'Peach'), 
   array('first_name' => 'Henry', 'last_name' => 'Tonkin'), 
   array('first_name' => 'Curly', 'last_name' => 'Moe'), 
   array('first_name' => 'Sensual', 'last_name' => 'Experience'), 
);
  table($users);
?>
</body>
</html>







 