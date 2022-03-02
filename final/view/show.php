

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>

    <link rel="stylesheet" type="text/css" href="../css/dashboard.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>





<?php
// Include the database configuration file
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$db = "webtech";
$conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);

// Get images from the database
$query = $conn->query("SELECT * FROM student ORDER BY uploaded_on DESC");

if($query->num_rows > 0){
    while($row = $query->fetch_assoc()){
        $imageURL = '../uploads/'.$row["file_name"];
?>
    <img src="<?php echo $imageURL; ?>" alt="" />
<?php }
}else{ ?>
    <p>No image(s) found...</p>
<?php } ?>


<div class="container">


  <button id="test">Click to fade Images</button><br><br>

<div id="div1">
<img src="../uploads/wallpaper.jpg" alt="Trulli" >
</div><br>
<div id="div2" >


  <img src="../uploads/wallpaper.jpg" alt="Trulli" >
</div><br>
<div id="div3" >


  <img src="../uploads/hunt.jpg" alt="Trulli">
</div>


</div>

<td> <a class="home" href="dashboard.php">Go Home</a></td>
<script src="../js/jquery.js"></script>
</body>
</html>
