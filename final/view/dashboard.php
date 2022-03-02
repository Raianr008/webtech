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
    <link rel="stylesheet" type="text/css" href="../css/dashboard.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <button type="button" id="button" name="button">check doctor availability</button>
    
      <h1>welcome to dashboard </h1>

 <h3> Hello <?php echo $_SESSION["username"];?></h3>





  <ul>
    <li class="dropdown">
      <a href="javascript:void(0)" class="dropbtn">Admin</a>
      <div class="dropdown-content">
        <a href="../control/admin.php">User</a>
        <a href="../view/adddoc.php">Add Doctor</a>
        <a href="../view/adddrug ">Add Drugs</a>
      </div>
    </li>



    <li><a href="profile.php">profile</a></li>

    <li><a href="doctor.php">Doctor list</a></li>

    <li><a href="appoinment.php">Set appoinment</a></li>

    <li><a href="viewAppointment.php">view appoinment</a></li>

    <li class="dropdown">
      <a href="javascript:void(0)" class="dropbtn">Images</a>
      <div class="dropdown-content">
        <a href="images.php">Add images</a>
        <a href="../view/show.php">View image</a>

      </div>
    </li>




    <li><a href="Cabin.php">Cabin Information</a></li>
    <li><a href="druglist.php">Drug List</a></li>
    <li><a href="pathology.php">Test List</a></li>
<li>

  <form class="" action="" method="post" >
    <table>
        <tr>
            <td> </td>
            <td><input type="text" id="username" name="username" placeholder="enter your username" onkeyup="MyAjaxFunc()"></td>
        </tr>






      </table>
  </form>





</li>

    <li><a href="../control/logout.php">logout</a></li>

  </ul>



  <h2 id="demo"></h2>
  <script src="../ajax/myajax.js"></script>
  <script src="../js/jquery.js"></script>
  </body>
</html>
