<?php
   $users = array(
   array("first_name" => "Michael", "last_name" => "Choi"), 
   array("first_name" => "John", "last_name" => "Supsupin"), 
   array("first_name" => "Mark", "Last_name" => "Guillen") 
   ); 
   foreach($users as $user) //fetch a new row in $users and store that in $user
   { 
    foreach($user as $key=>$value) //go through each key/value pair for $user   
      { 
       echo $key . " : " . $value ."<br />"; 
      } 
   } 

  $integer = 500; 
floatval($integer); 
echo $integer;

define('A_WEEK', 7); 
$two_weeks = A_WEEK + A_WEEK;
$dojos = 5; 
$ninjas = 2; 

try { 
if($ninjas < $dojos) 
throw new Exception('Ninjas are less than Dojos'); 
} 
catch(Exception $e) { 
echo $e->getMessage(); 

$screech = "iiiikkkkk"; 
echo intval($screech);

$key = 5; 
if($key) 
echo 'haha'; 
else 
echo 'huhu';
}

  
?>








 <table>

<?php
  for($i=0; $i<10; $i++)
  { ?>
    <tr>
      <td><?= $i ?></td>
      <td>adsf</td>
      <td>asdf</td>
    </tr>
<?php
  } ?>
</table>
?>