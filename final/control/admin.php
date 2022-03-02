<?php  include('../control/adminupdate.php'); ?>

<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<link rel="stylesheet" type="text/css" href="../css/admin.css">
</head>
<body>


  <form class="sub " action="" method="post" >

  Search Product
  <input type="text" name="username" placeholder="enter your search query">
  <input type="submit" name="search" value="Search">


</form> <br><br>
<div class="updateprofile">



  <br><br>

  Update profile
  <form method="post" action="">

    <table>

      <tr>
       <td> Username</td>
       <td> <input type="text" name="username" value="<?php echo $username; ?>"></td>

      </tr>




    <tr>
     <td> <label for="fname">First name:</label><br></td>
     <td> <input type="text" name="fname" value="<?php echo $fname; ?>"></td>
     </tr>



    <tr>
     <td><label for="lname">Last name:</label></td>
     <td><input type="text" name="lname" value="<?php echo $lname; ?>"></td>
    </tr>


    <tr>
     <td><label for="email">Email:</label></td>
     <td> <input type="email" name="email" value="<?php echo $email; ?>"> </td>
    </tr>



    <tr>
     <td> <label for="fname">number</label><br></td>
     <td> <input type="text" name="number" value="<?php echo $number; ?>"></td>
    </tr>


    <td>  <input type="submit" name="update" value="Update"></td>


    </table>

  </form>
<br><br>


</div>
<button id="Hideup">Hide update </button>
<button id="showup">Show Update</button>

<div class="adminDelete">
<br><br>
  Update profile
  <form method="post" action="">

    <table>

      <tr>
       <td> Username</td>
       <td> <input type="text" name="username" value="<?php echo $username; ?>"></td>

      </tr>




    <tr>
     <td> <label for="fname">First name:</label><br></td>
     <td> <input type="text" name="fname" value="<?php echo $fname; ?>"></td>
     </tr>



    <tr>
     <td><label for="lname">Last name:</label></td>
     <td><input type="text" name="lname" value="<?php echo $lname; ?>"></td>
    </tr>


    <tr>
     <td><label for="email">Email:</label></td>
     <td> <input type="email" name="email" value="<?php echo $email; ?>"> </td>
    </tr>



    <tr>
     <td> <label for="fname">number</label><br></td>
     <td> <input type="text" name="number" value="<?php echo $number; ?>"></td>
    </tr><br><br>


    <td>  <input type="submit" name="delete" id="del" value="delete"></td>


    </table>

  </form>
<br><br>



</div>
<button id="HideDel">Hide Delete </button>
<button id="showDel">Show Delete</button>

<td> <a href="../view/dashboard.php">go back to dashboard</a></td>



<script src="../js/jquery.js"></script>

</body>
</html>
