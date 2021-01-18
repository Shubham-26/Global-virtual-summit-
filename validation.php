<?php
$f_nameErr=$l_nameErr =$passErr  = $usernameErr = $emailErr= "";

$fname =$lname= $pass = $username =$email= "";
if(isset($_POST['btn_signup']))
{

if ($_SERVER["REQUEST_METHOD"] == "POST")
 {
  if (empty($_POST["firstname"])) {
    $f_nameErr = "First Name is required";
  } else {
    $fname = test_input($_POST["firstname"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$fname)) {
      $f_nameErr = "Only letters and white space allowed"; 
    }
  }
   if (empty($_POST["lastname"])) {
    $l_nameErr = "Last Name is required";
  } else {
    $lname = test_input($_POST["lastname"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$lname)) {
      $l_nameErr = "Only letters and white space allowed"; 
    }
  }

  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  }
  else
  {
    $email = test_input($_POST["email"]);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $emailErr = "Invalid email format";
  }
  }

   if (empty($_POST["username"])) {
    $usernameErr = "Username is required";
  } else {
    $username = test_input($_POST["username"]);
   	}

  if(empty($_POST["password"])) {
    $passErr = "Password is required";
  } else {
    $Pass = test_input($_POST["password"]);
  }
  

 

}
}

function test_input($data)
 {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

