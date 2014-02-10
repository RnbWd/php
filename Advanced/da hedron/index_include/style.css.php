<?php 

  if(isset($_SESSION['error']))
  {
    foreach($_SESSION['error'] as $key => $value)
    {
      echo "input[name=".$key."] { background-color: yellow; } ";
    }
  }
  
?>
* { 
  font-family: 'Kelly Slab', cursive; 
}

input[type=submit] {
  background-color: blue;
  border-radius: none;
  color: white;
  border:none;
  font-family: 'Kelly Slab', cursive;
}
input[type=email] {
  font-family: 'Kelly Slab', cursive;
}
input[type=text] {
  font-family: 'Kelly Slab', cursive;
}
input[type=password] {
  font-family: 'Kelly Slab', cursive;
}
body {
  background-image: url('images/sacredgeo1.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-position: 50% 70px; 
  background-color: #4E207E;
}
h1, h4 {
  text-align: center;
  color: goldenrod;
  margin: 0px 0px;
}
img {
  height: 30px;
  width: 30px;
  padding: 0px 10px;
}