
<?php

session_start();
include ('validation.php');

//if(empty($_SESSION["username"])) // Destroying All Sessions
//{
//header("Location: ../control/login.php"); // Redirecting To Home Page
//}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>



  <?php
include('db.php');
  // If form submitted, insert values into the database.
  if (isset($_REQUEST['submit'])){
          // removes backslashes
  	$username = $_REQUEST['username'];
          //escapes special characters in a string

  	$email = $_REQUEST['email'];

  	$password = $_REQUEST['pass'];
  	$obj = new db();
  	$obj->savaData($username,$password,$email);

  }
  ?>




<div class="">


  <form action="" method="POST">
  Username : <input type="text" name="username" value=""><br><br>
  First  Name : <input type="text" name="fname" value=""><br><br>
  Last  Name : <input type="text" name="lname" value=""><br><br>
  age : <input type="number" name="age" value=""><br><br>

  Designation : <input type="radio" id="Programmer" name="Programmer" value="Junior">
  <label for="Programmer">junior</label>
  <input type="radio" id="Programmer" name="Programmer" value="senior">
  <label for="Programmer">senior</label>
  <input type="radio" id="Programmer" name="Programmer" value="Lead">
  <label for="Programmer">lead</label> <br>


  <input type="checkbox" id="lang1" name="lang1" value="java">
  <label for="lang1">java</label><br>
  <input type="checkbox" id="lang2" name="lang2" value="PHP">
  <label for="lang2">php</label><br>
  <input type="checkbox" id="lang3" name="lang3" value="C++">
  <label for="lang3">C++</label><br>

  Email : <input type="email" name="email" value="" required><br><br>
  Password : <input type="password" name="pass" value="" required ><br><br>
    <input type="submit" value="Submit" name="submit">
    <input type="submit" value="Reset">
  </form>
  </div>


</body>
</html>
