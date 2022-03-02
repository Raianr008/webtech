<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

<?php
$username  = $lname = $email =$password =$age="";
$L1=$L2=$L3="";
$validatecheckbox = "";

if (isset($_POST['submit']) ){


if (empty($_REQUEST["username"]) || (strlen($_REQUEST["username"])<5))
{
  echo "enter first name <br> ";// code...
} else if (!preg_match("/^[a-zA-Z-' ]*$/",$username)) {
  echo "Only letters and white space allowed <br>";
} else
 {
   echo "<br>";
  ////echo "your first name is :" . $_REQUEST ["username"];
}




if (empty($_REQUEST["lname"]) || (strlen($_REQUEST["lname"])<5)) {
  echo "enter last name <br>";// code...
} else if (!preg_match("/^[a-zA-Z-' ]*$/",$lname)) {
  echo "Only letters and white space allowed <br>";
}else
 {
   echo "<br>";
  //echo "your last name is :" .$_REQUEST ["lname"];
}


$email = $_POST['email'];;
   // Validate email
   if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
      echo("$email is a valid email address");
   }
   else{
      echo("$email is not a valid email address");
   }

if (empty($_REQUEST["age"])) {
  echo "enter last name <br>";// code...
}
else
 {
   echo "<br>";
  //echo "your age name is :" .$_REQUEST ["age"]."<br>";
}

//&& !preg_match("/(?=.*[@#$%^&+=]).*$/", $passwordword
$password = $_POST['password'];
if (!preg_match("#.*^(?=.{8,20})(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*\W).*$#", $password)) {
 //echo "passwordword must be at least 8 characters in length and must contain at least one number, one upper case letter, one lower case letter and one special character.";
}
 else {
  echo $_REQUEST["password"];
}
// if(isset($_POST['password'])) {
//   $passwordword = $_POST['password'];
//   $number = preg_match('@[0-9]@', $password);
//   $uppercase = preg_match('@[A-Z]@', $password);
//   $lowercase = preg_match('@[a-z]@', $password);
//   $specialChars = preg_match('@[^\w]@', $password);
//
//   if(strlen($password) < 8 || !$number || !$uppercase || !$lowercase || !$specialChars) {
//     echo "passwordword must be at least 8 characters in length and must contain at least one number, one upper case letter, one lower case letter and one special character.";
//   } else {
//     echo  $_REQUEST["password"];
//     }
// }



if(!isset($_REQUEST["lang1"]) && !isset($_REQUEST["lang2"]) && !isset($_REQUEST["lang3"]))
{
    echo "please select at least one checkbox ||";

}
else{
   if(isset($_REQUEST["lang1"]))
   {
     echo "<br>";
       echo $_REQUEST["lang1"];
   }
   if(isset($_REQUEST["lang2"]))
   {
     echo "<br>";
       echo $_REQUEST["lang2"];
   }
   if(isset($_REQUEST["lang3"]))
   {
     echo "<br>";
    echo $_REQUEST["lang3"];
   }
}
if(isset($_REQUEST["Programmer"]))
{

    echo "<br> Your a :" .$_REQUEST["Programmer"];
}
else{
    echo  "please select at least one radio ||";
}

$data = new db;
 $success_message = '';

$insert_data = array(
         'username'     =>     mysqli_real_escape_string($data->con, trim($_POST['username'])),
         'email'          =>     mysqli_real_escape_string($data->con, $_POST['email']),
         'password'          =>     mysqli_real_escape_string($data->con, $_POST['password'])
    );
    if($data->insert('student', $insert_data))
    {
         header('Location: ../index.php');
    }

}else {
  //echo "bla";
}




?>


  </body>
</html>
