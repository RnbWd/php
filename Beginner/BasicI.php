

<?php
   
   for ($i=0; $i < 100; $i++) 
   { 
      $score = rand(50,100);

      echo "<h1>Your Score: " . $score . "/100</h1>";

      if($score<70)
      {
         echo "<h2>Your grade is D</h2>";
      }
      else if($score<80)
      {
         echo "<h2>Your grade is C</h2>";
      }
      else if($score<90)
      {
         echo "<h2>Your grade is B</h2>";
      }
      else 
      {
         echo "<h2>Your grade is A</h2>";
      }
   }  
?>
