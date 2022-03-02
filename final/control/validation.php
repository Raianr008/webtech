<?php
require('../model/db.php');


$validatefname=$validateusername=$validatefname=$validatename=$validateemail=$validatepassword="";
$validatecheckbox=$passwordval="";
$validateradio="";
$validateage="";
$validatefile="";
$L1=$L2=$L3="";

$username=$fname=$lname=$dob=$email=$number=$gender=$password=$cpassword="";

//if(isset($_POST["submit"]))

if($_SERVER["REQUEST_METHOD"]=="POST")
{
$username=$_REQUEST["username"];
$fname=$_REQUEST["fname"];
$lname=$_REQUEST["lname"];
$email=$_REQUEST["email"];
$number=$_REQUEST["number"];
$gender=$_REQUEST["gender"];
$dob=$_REQUEST["dob"];


$password=$_REQUEST["password"];
$cpassword=$_REQUEST["cpassword"];


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


if(empty($_REQUEST["fname"]) || (strlen($_REQUEST["fname"])<5))
{
    $validatefname= "you must First enter name ||";

}
// elseif (!preg_match('/^\w{5,}$/', $fname)) {
//   $validatefname= "you must valid  enter name ||";
// }
else
{
    $fname=$_REQUEST["fname"];
    $validatefname = "your first is ".$fname;
}

if(empty($_REQUEST["number"]) || (strlen($_REQUEST["number"])<11))
{
    $validatefname= "you must phone number ||";

}
// elseif (!preg_match('/^\w{5,}$/', $fname)) {
//   $validatefname= "you must valid  enter name ||";
// }
else
{
    $number=$_REQUEST["number"];
    $validatenumber = "your first is ".$number;
}

if(empty($_REQUEST["dob"]))
{
    $validatename= "you must dob||";

}else {
  echo "";
}
if(empty($_REQUEST["lname"]) || (strlen($_REQUEST["lname"])<5))
{
    $validatename= "you must Last enter name||";

}
else
{
    $name=$_REQUEST["lname"];
    $validatename = " || your last is : ".$lname;
}

if(empty($email) || !preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix",$email))
{
    $validateemail="you must enter email ||";
}
else{
    $validateemail= " || your email is\n ".$email;
}


if(isset($_REQUEST["gender"]))
{
    $validateradio= $_REQUEST["gender"];
}
else{
    $validateradio= "please select at least one radio ||";
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
if ($password === $cpassword) {
  echo $passwordval;
}else {
  echo "your password didn't match";
}


$connection = new db();
$conobj=$connection->OpenCon();
if($connection->insertdata($conobj,"patient",$_POST["username"],$_POST["fname"],$_POST["lname"],$_POST["email"],$_POST["dob"],$_POST["gender"],$_POST["number"],$_POST["password"],$_POST["cpassword"]))
{
  //echo "data inserted successfully";

  header('location: ../view/login.php');
}
else
{
  echo "Error in updating";
}
$connection->CloseCon($conobj);

/*$target_dir = "files/";
$target_file = $target_dir . $_FILES["filetoupload"]["name"];


	if (move_uploaded_file($_FILES["filetoupload"]["tmp_name"], $target_file)) {
       echo $_FILES["filetoupload"]["type"];
    } else {
        echo "Sorry, there was an error uploading your file.";
    }

    */


/*$data = new db();
   $success_message = '';
$insert_data = array(
        'username'     =>     mysqli_real_escape_string($data->con, trim($_POST['username'])),
         'fname'     =>     mysqli_real_escape_string($data->con, trim($_POST['fname'])),
         'lname'          =>     mysqli_real_escape_string($data->con, $_POST['lname']),
         'email'          =>     mysqli_real_escape_string($data->con, $_POST['email']),
         'dob'          =>     mysqli_real_escape_string($data->con, $_POST['dob']),
         'gender'          =>     mysqli_real_escape_string($data->con, $_POST['gender']),
         'number'          =>     mysqli_real_escape_string($data->con, $_POST['number']),
         'password'          =>     mysqli_real_escape_string($data->con, $_POST['password']),
         'cpassword'          =>     mysqli_real_escape_string($data->con, $_POST['cpassword']),
         'filetoupload'          =>     mysqli_real_escape_string($data->con, $_FILES['filetoupload']["name"])



    );



    if($data->insert('patient', $insert_data))
    {
         header ("Location : https://github.com/dbnnomanbhai/Travel_Project_with_Shakibur/blob/main/travel/customer/view/searchCustomer.php");
    }
 */





}
?>
