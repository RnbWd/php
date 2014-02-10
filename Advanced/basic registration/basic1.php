<?php 

  session_start();

  if(isset($_POST['action']) and $_POST['action'] == "login")
  {
    login();
  }
  else if(isset($_POST['action']) and $_POST['action'] == 'register')
  {
    register();
  }
  else
  {
    session_destroy();
    header("Location: index.php");
  }

//login actions
function login()
{
  $errors = array();

  if(!(isset($_POST['email']) and filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)))
  {
    $errors[] = "email is not valid";
  }

  if(!(isset($_POST['password']) and strlen($_POST['password'])>=6))
  {
    $errors[] = "please double check your password (length must be greater than 6)";
  }

  //see if there are errors
  if(count($errors) > 0)
  {
    $_SESSION['login_errors'] = $errors;
    header('Location: basic0.php');
  }
  /* else
  {
    //check if the email and the password is valid
    $query = "SELECT * FROM users WHERE email = '{$_POST['email']}' AND password ='".md5($_POST['password'])."'";
    $users = fetch_all($query);
    
    if(count($users)>0)
    {
      $_SESSION['logged_in'] = true;
      $_SESSION['user']['first_name'] = $users[0]['first_name'];
      $_SESSION['user']['last_name'] = $users[0]['last_name'];
      $_SESSION['user']['email'] = $users[0]['email'];
      header("Location: wall.php");
    }
    else
    {
      $errors[] = "Invalid login information";
      $_SESSION['login_errors'] = $errors;
      header('Location: basic0.php');
    }
  }*/ 
}


//registration action
function register()
{
  foreach($_POST as $key => $value)
  {
    if ($key == 'email' && (filter_var($value, FILTER_VALIDATE_EMAIL) || $value == NULL))
    {
      $_SESSION['error'][$key] = "input[name=".$key."] { background-color: yellow;}"; 
    }
    elseif ($key == 'first' && ($value == NULL || is_numeric($value)))
    {
       $_SESSION['error'][$key] =  "input[name=".$key."] { background-color: yellow;}";
    }
    elseif ($key == 'last' && ($value == NULL || is_numeric($value)))
    {
       $_SESSION['error'][$key] = "input[name=".$key."] { background-color: yellow;}";
    }
    elseif ($key == 'password' && ($value == NULL || strlen($value) < 6))
    {
       $_SESSION['error'][$key] = "input[name=".$key."] { background-color: yellow;}";
    }
    elseif ($key == 'confirm' && ($value == NULL || $value != $_POST['password']))
    {
       $_SESSION['error'][$key] = "input[name=".$key."] { background-color: yellow;}";
    }
  }
  /* if (!isset($_SESSION['error']))
  {
    //check if email is already in database
    $query = "SELECT * FROM users WHERE email = '{$_POST['email']}'";
    $check = fetch_all($query); 

    if(count($check)>0)
    {
      $_SESSION['register_error'] = "someone already used that email address :/";
      header("Location: index.php");
    }
    else
    {
      $query = "INSERT INTO users (first_name, last_name, email, password, created_at) VALUES ('{$_POST['first']}', '{$_POST['last']}', '{$_POST['email']}', '".md5($_POST['password'])."', NOW())";
      mysql_query($query);

      $_SESSION['message'] = "User was successfully created!";
      header("Location: basic0.php");
    }
  } */
  if (isset($_SESSION['error']))
  {
    $_SESSION['message'] = "Please try again - see the highlighted fields below:";
    header("Location: basic0.php");
  }
}

 ?>