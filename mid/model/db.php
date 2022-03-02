<?php
class db{

function OpenCon()
 {
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "webtech";
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);

 return $conn;
 }

function insertdata($conn,$table,$username,$fname,$lname,$email,$dob,$gender,$number,$password,$cpassword)
{



  $result =$conn->query("INSERT INTO $table (`username`, `fname`, `lname`, `email`, `dob`, `gender`, `number`, `password`, `cpassword`) VALUES ('$username','$fname','$lname','$email','$dob','$gender','$number','$password','$cpassword');");

  return $result;
}


function insertappoint($conn,$table,$sname,$pname,$email,$prob)
{



  $result =$conn->query("INSERT INTO $table (`sname`, `pname`, `email`, `prob`) VALUES ('$sname','$pname','$email','$prob');");

  return $result;
}


function insertdoc($conn,$table,$sname,$pname,$email)
{



  $result =$conn->query("INSERT INTO $table (`sname`, `pname`, `email`) VALUES ('$sname','$pname','$email');");

  return $result;
}

 function CheckUser($conn,$table,$username,$password)
 {
$result = $conn->query("SELECT * FROM ". $table." WHERE username='". $username."' AND password='". $password."'");
 return $result;
 }



function CloseCon($conn)
 {
 $conn -> close();
 }
}
?>
