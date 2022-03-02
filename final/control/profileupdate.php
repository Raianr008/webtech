<?php
include('../model/db.php');

$username=$fname= $lname=$number=$email="";
 if(isset($_POST["search"]))
 {

    $username=$_POST["username"];

 $connection = new db();
 $conobj=$connection->OpenCon();

 $userQuery=$connection->SearchUser($conobj,"patient",$username);

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
    if($connection->UpdateProfile($conobj,"patient",$_POST["username"],$_POST["fname"],$_POST["lname"],$_POST["number"],$_POST["email"]))
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
    if($connection->DeleteProduct($conobj,"product",$_POST["pid"],$_POST["pname"],$_POST["pdesc"],$_POST["pcate"],$_POST["pprice"]))
    {
      echo "Deletion successful";
    }
    else
    {
      echo "Error in deletion";
    }
    $connection->CloseCon($conobj);
 }



 if (isset($_POST['submit'])) {
     $servername = "localhost";
     $username = "root";
     $password = "";
     $dbname = "patient";

     // Create connection
     $conn = new mysqli($servername, $username, $password, $dbname);
     // Check connection
     if ($conn->connect_error) {
       die("Connection failed: " . $conn->connect_error);
     }
     else{
       if (is_uploaded_file($_FILES['fileToUpload']['tmp_name'])) {

         $imgData = addslashes(file_get_contents($_FILES['fileToUpload']['tmp_name']));
         $imageProperties = getimageSize($_FILES['fileToUpload']['tmp_name']);

         $sql = "INSERT INTO product(imageType ,imageData)	VALUES('{$imageProperties['mime']}', '{$imgData}')";
         if ($conn->query($sql) === TRUE) {
           echo "New record created successfully";
         } else {
           echo "Error: " . $sql . "<br>" . $conn->error;
         }

         $conn->close();
     }
     }

 }






?>
