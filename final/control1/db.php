<?php
class db{
  public $con;
      public $error;
var $tbname="student";
public function __construct()  
 {
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "webtech";
 //$tbname="student";
 //$conn = new mysqli($dbhost, $dbuser, $dbpass,$db);

 $this->con = mysqli_connect("localhost", "root", "", "webtech");
           if(!$this->con)
           {
                echo 'Database Connection Error ' . mysqli_connect_error($this->con);
           }

 //return $conn;
 }



// public function savaData($user,$em,$pass) {
//
//   $conn=$this->connect();
//    $sql=mysqli_query($conn, "insert into ".$this->tbname."(username,email,password) values ('$user','$em','$pass')")or die (mysqli_error($conn));
//
//   //$sql="insert into registration values('','{$user}','{$em}','{$pass}',NOW())";
//
//   if(mysqli_query($conn,$sql)){
//       echo "New Record Was Created Successfully!";
//   }else{
//       //echo "Error: ".$sql."<br>".$conn->error;
//       echo mysqli_error($conn);
//   }
// }


public function insert($table_name, $data)
      {
           $string = "INSERT INTO ".$table_name." (";
           $string .= implode(",", array_keys($data)) . ') VALUES (';
           $string .= "'" . implode("','", array_values($data)) . "')";
           if(mysqli_query($this->con, $string))
           {
                return true;
           }
           else
           {
                echo mysqli_error($this->con);
           }
      }

//  function ShowAll($conn,$table)
//  {
// $result = $conn->query("SELECT * FROM  $table");
//  return $result;
//  }


function CloseCon($conn)
 {
 $conn -> close();
 }
}
?>
