<?php

function time_calc($created)
  {
    date_default_timezone_set("America/Vancouver");
    $date = date('Y-m-d H:i:s');
    $to_time = strtotime($date);
    $from_time = strtotime($created);
    return round(abs($to_time - $from_time) / 60,2);
  }

    foreach($messages as $message)
    {
      echo "<div class='message'><span class='name'>". $message['first_name'] ." ". $message['last_name']."</span><span class='smaller'> wrote:<div class='message_content'>". $message['message']. "</div> at ".$message['created_at']."</span><br>";
  
      if(($message['users_id'] == $_SESSION['user']['id']) && (time_calc($message['created_at']) < 31))
      {
        echo "<form action='index_include/process.php' method='post'>
                <input type= 'hidden' name= 'action' value='delete' />
                <input type = 'hidden' name='id' value= '{$message['id']}' />
                <input type='submit' value='Delete Message' />
              </form>";  
      }
 
      foreach($comments as $comment)
      {
        if($comment['id'] == $message['id'])
        {
          echo $comment['first_name']." ".$comment['last_name']. " <span class='smaller'>commented: <span class='comment_content'>". $comment['comment']. "</span> at ".$comment['created_at']."</span><br>";
        }
      }
      echo "<form action='index_include/process.php' method='post'>
              <p>Comment:</p>
              <input type='hidden' name='action' value='comment' />
              <input type='hidden' name='message_id' value= '{$message['id']}' />
              <textarea name='comment' rows='2' cols='50' placeholder='Type Text HEre'></textarea>
              <p><input type='submit' value='Submit Comment' /></p>
            </form>
            </div>";
    }
 ?>