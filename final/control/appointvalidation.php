<?php

require('../model/db.php');


$validatesname="";
$validatepname="";
$validateemail="";
$validateprob="";

$sname=$pname=$email=$prob="";
if($_SERVER["REQUEST_METHOD"]=="POST")
{
$sname=$_REQUEST["sname"];
$pname=$_REQUEST["pname"];
$prob=$_REQUEST["prob"];
$email=$_REQUEST["email"];


if(empty($_REQUEST["sname"]) || (strlen($_REQUEST["sname"])<2))
{
    $validateusername= "you must enter serial ||";

}
else
{
    $fname=$_REQUEST["sname"];
    $validatesname = "your first is ".$sname;
}

if(empty($_REQUEST["pname"]) || (strlen($_REQUEST["pname"])<5))
{
    $validatepname= "you must enter patient name ||";

}
// elseif (!preg_match('/^\w{5,}$/', $fname)) {
//   $validatefname= "you must valid  enter name ||";
// }
else
{
    $pname=$_REQUEST["pname"];
    $validatepname = "your first is ".$pname;
}

if(empty($email) || !preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix",$email))
{
    $validateemail="you must enter email ||";
}
else{
    $validateemail= " || your email is\n ".$email;
}






$connection = new db();
$conobj=$connection->OpenCon();
if($connection->insertappoint($conobj,"appoinment",$_POST["sname"],$_POST["pname"],$_POST["email"],$_POST["prob"]))
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
