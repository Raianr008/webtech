<?php
include('../model/db.php');

$username=$fname= $lname=$number=$email="";
 if(isset($_POST["search"]))
 {

    $username=$_POST["username"];

 $connection = new db();
 $conobj=$connection->OpenCon();

 $userQuery=$connection->AdminSearch($conobj,"patient",$username);

 if ($userQuery->num_rows > 0) {

     // output data of each row
     while($row = $userQuery->fetch_assoc()) {
       $username=$row["username"];
       $fname=$row["fname"];
       $lname=$row["lname"];
       $number=$row["number"];
        $email=$row["email"];


   }
 }
   else {
     echo "0 results";
   }
   $connection->CloseCon($conobj);
}

 if(isset($_POST["update"]))
 {

    $connection = new db();
    $conobj=$connection->OpenCon();
    if($connection->AdminUpdate($conobj,"patient",$_POST["username"],$_POST["fname"],$_POST["lname"],$_POST["number"],$_POST["email"]))
    {
      echo "Update successful";
    }
    else
    {
      echo "Error in updating";
    }
    $connection->CloseCon($conobj);
 }


 if(isset($_POST["delete"]))
 {

    $connection = new db();
    $conobj=$connection->OpenCon();
    if($connection->AdminDelete($conobj,"patient",$_POST["username"],$_POST["fname"],$_POST["lname"],$_POST["number"],$_POST["email"]))
    {
      echo "Deletion successful";
    }
    else
    {
      echo "falied to delete";
    }
    $connection->CloseCon($conobj);
 }




?>
