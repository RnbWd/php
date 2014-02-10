<?php 
  session_start();
  require("connect.php");

  if(isset($_POST['action']) and $_POST['action'] == "login")
  {
    login();
  }
  else if(isset($_POST['action']) and $_POST['action'] == 'register')
  {
    register();
  }
  elseif(isset($_POST['action']) and $_POST['action'] == 'new_message')
  {
    new_message();
  }
  elseif(isset($_POST['action']) and $_POST['action'] == 'comment')
  {
    comment();
  }
  elseif(isset($_POST['action']) and $_POST['action'] == 'delete')
  {
    delete();
  }
  else
  {
    session_destroy();
    header("Location: ../index.php");
  }

  function login()
  {
    if(!filter_var($_POST['email_login'], FILTER_VALIDATE_EMAIL))
    {
      $_SESSION['error']['email_login'] = "";
    }

    if(strlen($_POST['password_login'])<6)
    {
      $_SESSION['error']['password_login'] = "";
    }

    if(!isset($_SESSION['message']))
    {
      $email = $_POST['email_login'];
      $password = md5($_POST['password_login']);
      $query = "SELECT * FROM users WHERE email = '{$email}' AND password ='{$password}';";
      $user = fetch_all($query);
      
      if(count($user)>0)
      {
        $_SESSION['logged_in'] = true;
        $_SESSION['user']['id'] = $user['0']['id'];
        $_SESSION['user']['first_name'] = $user['0']['first_name'];
        $_SESSION['user']['last_name'] = $user['0']['last_name'];
        $_SESSION['user']['email'] = $user['0']['email'];
        header("Location: ../hedron.php");
      }
      else
      {
        $_SESSION['message'] = "Invalid login information";
        $_SESSION['error']['password_login'] = "";
        $_SESSION['error']['email_login'] = "";
        header('Location: ../index.php');
      }
    }
    else
    {
      $_SESSION['message'] = "Invalid login information";
      header("Location: ../index.php");
    }
  }

  //registration action
  function register()
  {
    foreach($_POST as $key => $value)
    {
      if($value == NULL)
      {
        $_SESSION['error'][$key] = "'Please enter information in this field.'";
      }
     /* elseif ($key == 'email' && !filter_var($value, FILTER_VALIDATE_EMAIL))
      {
        $_SESSION['error'][$key] = "'Please enter valid email address.'"; 
      } */
      elseif (($key == 'first' || $key == 'last') && preg_match('!\d+!',$value))
      {
         $_SESSION['error'][$key] =  "'You are not allowed to use numbers in this field.'";
      }
      elseif ($key == 'password' && strlen($value) < 6)
      {
         $_SESSION['error'][$key] = "'Password must be at least 6 characters.'";
      }
      elseif ($key == 'confirm' && $value != $_POST['password'])
      {
         $_SESSION['error'][$key] = "'This is not the same as password.'";
      }
    }

    if (!isset($_SESSION['error']))
    {
      //check if email is already in database
      $query = "SELECT * FROM users WHERE email = '{$_POST['email']}'";
      $check = fetch_all($query); 

      if(count($check)>0)
      {
        $_SESSION['message'] = "someone already used that email address :/";
        header("Location: ../index.php");
      }
      else
      {
        $query = "INSERT INTO users (first_name, last_name, email, password, created_at) VALUES ('".mysql_real_escape_string($_POST['first'])."', '".mysql_real_escape_string($_POST['last'])."', '".mysql_real_escape_string($_POST['email'])."', '".mysql_real_escape_string(md5($_POST['password']))."', NOW())";
        mysql_query($query);

        $_SESSION['message'] = "User was successfully created!";
        header("Location: ../index.php");
      }
    }
    else
    {
      $_SESSION['message'] = "Please try filling out the registration form again:";
      header("Location: ../index.php");
    }
  }

function new_message()
{
  $query = "INSERT INTO messages (users_id, message, created_at) VALUES ('".mysql_real_escape_string($_SESSION['user']['id'])."', '".mysql_real_escape_string($_POST['newmessage'])."', NOW());";
  mysql_query($query);
  header("Location: ../hedron.php");
}

function comment()
{
  $query = "INSERT INTO comments (users_id, messages_id, comment, created_at) VALUES ('".mysql_real_escape_string($_SESSION['user']['id'])."', '".mysql_real_escape_string($_POST['message_id'])."', '".mysql_real_escape_string($_POST['comment'])."', NOW());";
  mysql_query($query);
  header("Location: ../hedron.php");
}
function delete()
{
  $id = $_POST['id'];
  $query = "DELETE FROM messages WHERE id = '".mysql_real_escape_string($id)."';";
  mysql_query($query);
  header("Location: ../hedron.php");
}
 ?>