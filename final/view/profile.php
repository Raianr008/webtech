<?php
//include('../control/db.php');
include('../control/profileupdate.php');
session_start();
$data = new db;

if(empty($_SESSION["username"])) // Destroying All Sessions
{
header("Location: login.php"); // Redirecting To Home Page
}
?>

<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="../css/profile.css">
</head>
<body>
<h2>Welcome to Profile Page</h2>

 <h3>hello <?php echo $_SESSION["username"];?></h3>
<br/>update your Profile .

<?php
// $connection = new db();
// $conobj=$connection->getdata();
//
// $userQuery=$connection->ShowAll($conobj,"patient");
//
// if ($userQuery->num_rows > 0) {
//     echo "<table><tr><th>Name</th><th>Email</th><th>Address</th><th>Profession</th></tr>";
//     // output data of each row
//     while($row = $userQuery->fetch_assoc()) {
//       echo "<tr><td>".$row["fname"]."</td><td>".$row["email"]."</td><td>".$row["username"]."</td><td>".$row["gender"]."</td></tr>";
//     }
//     echo "</table>";
//   } else {
//     echo "0 results";
//   }



/*$post_data = $data->select  ('patient');


echo "<table><tr><th>username</th><th>firstname</th><th>email</th><th>phone number</th></tr>";

    foreach($post_data as $post)
    {
    ?>
    <tr>

      <td> <?php echo $post['username']; ?></td>
      <td> <?php echo $post['fname']; ?></td>
      <td> <?php echo $post['email']; ?></td>
      <td> <?php echo $post['number']; ?></td>


    </tr>
    <?php
    }

    */



    ?>

    <form class="sub " action="" method="post" enctype="multipart/form-data">

    Search Product
    <input type="text" name="username" placeholder="enter your search query">
    <input type="submit" name="search" value="Search">


    </form>

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


      <tr>
       <td> <label for="fname">Select Image File to Upload:</label><br></td>
       <td> <input type="file" name="file" value=""></td>
      </tr>

          




      <td>  <input type="submit" name="update" value="Update"></td>

      <td> <a href="dashboard.php">go back to dashboard</a></td>
      </table>

    </form>







</body>
</html>
