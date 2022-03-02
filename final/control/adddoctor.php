<?php
require('../model/db.php');

if($_SERVER["REQUEST_METHOD"]=="POST")
{
$username=$_REQUEST["sname"];
$fname=$_REQUEST["pname"];
$email=$_REQUEST["email"];




$connection = new db();
$conobj=$connection->OpenCon();
if($connection->insertdoc($conobj,"doctor",$_POST["sname"],$_POST["pname"],$_POST["email"]))
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
