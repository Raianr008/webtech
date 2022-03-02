<?php include "../control/validation.php";


?>
<?php // include "../control/jason.php"; ?>
<!DOCTYPE html>
<html>
<body>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
<h1>Fill Up the Form </h1>

<form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post" enctype="multipart/form-data" onkeyup="return validateform()">

<table>

	<tr>
	 <td> Username</td>
	 <td> <input type="text" id="username" name="username" minlength="5" ></td>

	</tr>

	<tr>
			<td><h3 id="Username_message"></h3></td>
	</tr>



<tr>
 <td> <label for="fname">First name:</label><br></td>
 <td> <input type="text" id="fname" name="fname" minlength="5" ></td><?php echo $validatefname; ?>
 </tr>
<tr>
		<td><h3 id="message_fname"></h3></td>
</tr>


<tr>
 <td><label for="lname">Last name:</label></td>
 <td><input type="text" id="lname" name="lname" minlength="5"></td><?php echo $lname; ?>
</tr>
<tr>
		<td><h3 id="message_lname"></h3></td>
</tr>

<tr>
 <td><label for="email">Email:</label></td>
 <td> <input type="email" id="email" name="email"></td><?php echo $validateemail; ?>
</tr>

<tr>
		<td><h3 id="message_email"></h3></td>
</tr>


<tr>
 <td> <label for="fname">number</label><br></td>
 <td> <input type="text" id="number" name="number" minlength="5" ></td>
</tr>

<tr>
		<td><h3 id="message_number"></h3></td>
</tr>


<tr>
  <td>Gender:</td>
  <td><input type="radio" id="gender" name="gender" value="male">
   <label for="gender">Male</label>
   <input type="radio" id="gender" name="gender" value="female">
	  <label for="gender">Female</label>
	<input type="radio" id="gender" name="gender" value="female">
  <label for="gender">Other</label>
 </tr>
	<tr>
			<td><h3 id="message_gender"></h3></td>
	</tr>




	<tr>
			<td>Birth Date:</td>
			<td><input type="date"  id ="dob" name="dob" ></td>
	</tr>
	<tr>
			<td><h3 id="dob_message"></h3></td>
	</tr>

	<tr>
   <td> </td>
   <td> <input type="text" id="password" name="password" minlength="5" placeholder="Enter your Password"></td>

  </tr>

  <tr>
      <td><h3 id="pass_message"></h3></td>
  </tr>


	
	<tr>
	 <td>Confirm password</td>
	 <td> <input type="password"  name="cpassword"></td>
	</tr>


	<tr>
			<td><h3 id="message_password"></h3></td>
	</tr
	<tr>
<td>choose your image</td>
  <td><input type="file" name="filetoupload">  </td>
  </tr>
<?php echo $validateradio; ?>
</tr>

<tr>
  <td> </Td>
</tr>

<tr>

  <?php echo $validatecheckbox; ?>
  <?php echo $L1;?>

<?php echo $L2;?>

<?php echo $L3;?>
</tr>

<tr>
  <td><p></p><br></Td>
  </tr>
  <tr>

  <td><input type="submit" value="Register"> </td>
	<td><a href="login.php">Login</a></td>
  </tr>


  </table>
</form>




<script src="../js/jsval.js"></script>
</body>
</html>
