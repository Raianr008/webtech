<?php
require('../model/db.php');
// If form submitted, insert values into the database.
//if(isset($_POST["submit"]))
if($_SERVER["REQUEST_METHOD"]=="POST")
{

	$username=$_REQUEST["username"];
	$password=$_REQUEST["password"];
	$email=$_REQUEST["email"];



	if(empty($_REQUEST["username"]) || (strlen($_REQUEST["username"])<5))
	{
	    $validateusername= "you must First enter name ||";

	}
	// elseif (!preg_match('/^\w{5,}$/', $fname)) {
	//   $validatefname= "you must valid  enter name ||";
	// }
	else
	{
	    $fname=$_REQUEST["username"];
	    $validateusername = "your first is ".$username;
	}

	if(empty($email) || !preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix",$email))
	{
	    $validateemail="you must enter email ||";
	}
	else{
	    $validateemail= " || your email is\n ".$email;
	}

	if(strlen ($password) < 8) {
	               $password = "Password atleast contain 1 special character||";

	               if(!preg_match("/(?=.*[@#$%^&+=]).*$/", $password)) {
	                   $password = "Password must contain atleast 8 characters||";
	               }
	               else {
	                   $validatepassword= " || your password is ".$password;
	               }

	           }

	 $connection = new db();
	 $conobj=$connection->OpenCon();
	 if($connection->insertdata($conobj,"patient",$_POST["username"],$_POST["email"],$_POST["password"]))
	 {
		 echo "data inserted successfully";
	 }
	 else
	 {
		 echo "Error in updating";
	 }
	 $connection->CloseCon($conobj);
}

?>
