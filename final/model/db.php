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

 function SearchUser($conn,$table,$username)
 {
 $result = $conn->query("SELECT * FROM $table WHERE username='$username'");
 return $result;
 }

 function AdminSearch($conn,$table,$username)
 {
 $result = $conn->query("SELECT * FROM $table WHERE username='$username'");
 return $result;
 }

 function ShowAll($conn,$table)
 {
$result = $conn->query("SELECT * FROM  $table");
 return $result;
 }

 function UpdateUser($conn,$table,$username,$firstname,$email,$gender,$dob)
 {
     $sql = "UPDATE $table SET firstname='$firstname', email='$email', gender='$gender',dob='$dob' WHERE username='$username'";

    if ($conn->query($sql) === TRUE) {
        $result= TRUE;
    } else {
        $result= FALSE ;
    }
    return  $result;
 }

 function UpdateProfile($conn,$table,$username,$fname, $lname,$number,$email)
 {
     $sql = "UPDATE $table SET username='$username',fname='$fname',lname='$lname',number='$number',  email='$email'WHERE username='$username'";
     if($conn->query($sql)===TRUE)
     {
         return TRUE;
     }
     else
     {
         return FALSE;
     }
 }

 function AdminUpdate($conn,$table,$username,$fname, $lname,$number,$email)
 {
     $sql = "UPDATE $table SET username='$username',fname='$fname',lname='$lname',number='$number',  email='$email'WHERE username='$username'";
     if($conn->query($sql)===TRUE)
     {
         return TRUE;
     }
     else
     {
         return FALSE;
     }
 }
 function SearchProduct($conn,$table,$username)
 {
     $sql = "UPDATE $table SET username='$username',fname='$fname',number='$number',  email='$email'WHERE username='$username'";
     if($conn->query($sql)===TRUE)
     {
         return TRUE;
     }
     else
     {
         return FALSE;
     }
 }

 function AdminDelete ($conn,$table,$username,$fname,$lname,$number,$email){
$sql = "DELETE FROM  $table WHERE username='$username'";

    if($conn->query($sql)===TRUE)
    {
        return TRUE;
    }
    else
    {
        return FALSE;
    }

 }

function CloseCon($conn)
 {
 $conn -> close();
 }
}
?>
