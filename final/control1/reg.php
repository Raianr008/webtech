<?php include "validation.php";
require('db.php');

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Registration</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>



<h1>Registration</h1>
 <form name="myForm" action="" method="post" >
<input type="text" name="username" placeholder="Username"  /> <span><?php ?></span>
<input type="email" name="email" placeholder="Email" required />
<input type="password" name="password" placeholder="Password" required />
<input type="submit" name="submit" value="submit" />


</form>


</body>
</html>
