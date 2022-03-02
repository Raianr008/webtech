
<?php
session_start();
require('db.php');
 $username=$lname = $email =$pass =$age=$err_fname="";

 if($_SERVER["REQUEST_METHOD"]=="POST")
 {
 $username=$_REQUEST["username"];
 $lastname=$_REQUEST["lastname"];
 $age=$_REQUEST["age"];
 $password=$_REQUEST["password"];
 $email=$_REQUEST["email"];

$f=0;
$has_error=false;
  // Validate email
  if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
   //header('location: ../index.php');
  }
  else{
     //echo("$email is not a valid email address");
  }


  $data = new db;
   $success_message = '';

// If form submitted, insert values into the database.
//if (isset($_POST['submit'])){


if(empty($_REQUEST["username"]) || (strlen($_REQUEST["username"])<5))
{
    echo "you must First enter name ||";

}

        // removes backslashes
	// $username = $_REQUEST['username'];
  //       //escapes special characters in a string
  //
	// $email = $_REQUEST['email'];
  //
	// $password = $_REQUEST['password'];
	// $obj = new db();
	// $obj->savaData($username,$password,$email);

  $insert_data = array(
           'username'     =>     mysqli_real_escape_string($data->con, trim($_POST['username'])),
           'email'          =>     mysqli_real_escape_string($data->con, $_POST['email']),
           'password'          =>     mysqli_real_escape_string($data->con, $_POST['password'])
      );
      if($data->insert('student', $insert_data))
      {
           header('Location: ../index.php');
      }



}

?>
