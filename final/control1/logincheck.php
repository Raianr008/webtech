<?php

session_start();

 $error="";
// store session data
if (isset($_POST['submit'])) {
if (empty($_POST['username']) || empty($_POST['password'])) {
echo "Username or Password is invalid";
}
else
{
  if ($_POST['username']=="abc" && $_POST['password']=="123") {
    $_SESSION["username"] = $_POST['username'];
    $_SESSION["password"] = $_POST['password'];
    $_SESSION["email"]="admin@email.com";

  }
  elseif($_POST['username']=="xyz" && $_POST['password']=="456"){
    $_SESSION["username"] = $_POST['username'];
    $_SESSION["password"] = $_POST['password'];
    $_SESSION["email"]="customer@email.com";
  }
  else {
    echo "username and pass can not be authenticated ";
  }



   }

}




?>
