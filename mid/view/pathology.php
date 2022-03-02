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
	<title></title>

</head>
<body>
<h2>Welcome to test  Page</h2>

<?php

   $post_data = $data->select  ('drug');


   echo "<table>
      <tr>
            <th>serial</th><th>test name</th><th>cost</th>
      </tr>";

       foreach($post_data as $post)
       {
       ?>
       <tr>

         <td> <?php echo $post['serial']; ?></td>
         <td> <?php echo $post['test_name']; ?></td>
         <td> <?php echo $post['cost']; ?></td>



       </tr>
       <?php
       }



       ?>




       <tr>
         <td> <a href="dashboard.php">go back to dashboard</a></td>
       </tr >



</body>
</html>
