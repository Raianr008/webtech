<?php
include "../model/db.php";

$username="";
$fname=$email=$number="";

  if (empty($_POST["username"])) {
    echo " enter your search query";
  }else {


 $connection = new db();
 $conobj=$connection->OpenCon();

 $userQuery=$connection->SearchUser($conobj,"patient",$_POST["username"]);

 if ($userQuery->num_rows > 0) {

   echo "<table><tr><th>username</th><th>first Name</th><th>email</th><th>phone</th></tr>";
   // output data of each row
   while($row = $userQuery->fetch_assoc()) {



     echo "<tr><td>".$row["username"]."</td><td>".$row["fname"]."</td><td>".$row["email"]."</td><td>".$row["number"]."</td></tr>";



    /* while($row = $userQuery->fetch_assoc()) {
       $pname=$row["username"];
       $pdesc=$row["fname"];
       $pcate=$row["email"];
       $pprice=$row["number"];


   }*/


   echo "</table>";


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
      if($connection->UpdateProduct($conobj,"student",$_POST["username"],$_POST["pname"],$_POST["pdesc"],$_POST["pcate"],$_POST["pprice"]))
      {
        echo "Update successful";
      }
      else
      {
        echo "Error in updating";
      }
      $connection->CloseCon($conobj);
   }


?>
