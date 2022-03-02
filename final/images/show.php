<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
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
        $imageURL = 'uploads/'.$row["file_name"];
?>
    <img src="<?php echo $imageURL; ?>" alt="" />
<?php }
}else{ ?>
    <p>No image(s) found...</p>
<?php } ?>

</body>
</html>
