<?php
include('../control/logincheck.php');

if(isset($_SESSION['username'])){
header("location: dashboard.php");
}
?>
<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" type="text/css" href="../css/loginstyle.css">
</head>
<body>

<h2>Login</h2>

<form action="" method="post"   onkeyup="return validateform()">
  <tr>
   <td> </td>
   <td> <input type="text" id="username" name="username" minlength="5" placeholder="please your username" ></td>

  </tr>

  <tr>
      <td><h3 id="Username_message"></h3></td>
  </tr>


  <tr>
   <td> </td>
   <td> <input type="text" id="password" name="password" minlength="5" placeholder="Enter your Password"></td>

  </tr>

  <tr>
      <td><h3 id="pass_message"></h3></td>
  </tr>




    <input name="submit" type="submit" value="LOGIN"><br>
</form>


  <a class="home" href="registration.php">Don't have account ? Registration Here </a>
<br>
<?php echo $error; ?>

<script src="../js/logincheck.js"></script>

</body>
</html>
