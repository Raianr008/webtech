<?php
session_start();
if(empty($_SESSION["username"]))
{
header("Location: login.php"); // Redirecting To Home Page
}

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>

    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    

      <h1>welcome to dashboard </h1>

 <h3> Hello <?php echo $_SESSION["username"];?></h3>





  <ul>




    <li><a href="profile.php">profile</a></li>

    <li><a href="doctor.php">Doctor list</a></li>

    <li><a href="appoinment.php">Set appoinment</a></li>

    <li><a href="viewAppointment.php">view appoinment</a></li>





    <li><a href="Cabin.php">Cabin Information</a></li>
    <li><a href="druglist.php">Drug List</a></li>



    <li><a href="../control/logout.php">logout</a></li>

  </ul>



  <h2 id="demo"></h2>

  </body>
</html>
