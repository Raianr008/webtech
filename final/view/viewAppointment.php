<?php
include('../control/db.php');
session_start();
$data = new db;

if(empty($_SESSION["username"])) // Destroying All Sessions
{
header("Location: ../control/login.php"); // Redirecting To Home Page
}
?>



<!DOCTYPE html>
<html>
<head>

	<link rel="stylesheet" type="text/css" href="../css/doctor.css">
	<title></title>

</head>
<body>
<h2>Welcome to test  Page</h2>
<div class="doctorList">
	<table id="doctor">



<?php

   $post_data = $data->select  ('appoinment');


   echo "<table >
      <tr>
            <th>serial</th><th>patients name </th><th>email</th> <th>problem</th>
      </tr>";

       foreach($post_data as $post)
       {
       ?>

			 <div class="doctorList">
		 <table id="doctor">


       <tr class="tab">

         <td> <?php echo $post['sname']; ?></td>
         <td> <?php echo $post['pname']; ?></td>
         <td> <?php echo $post['prob']; ?></td>
         <td> <?php echo $post['email']; ?></td>



       </tr>



			 </table>

			 </div>
       <?php
       }



       ?>

</table>
</div>

       <tr>
         <td> <a class="home" href="dashboard.php">go back to dashboard</a></td>
       </tr >



</body>
</html>
