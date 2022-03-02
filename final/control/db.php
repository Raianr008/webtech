<?php
class db{
  public $con;
      public $error;
public function __construct()
 {
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "aiub";
 //$tbname="student";
 //$conn = new mysqli($dbhost, $dbuser, $dbpass,$db);

 $this->con = mysqli_connect("localhost", "root", "", "webtech");
           if(!$this->con)
           {
                echo 'Database Connection Error ' . mysqli_connect_error($this->con);
           }

 //return $conn;
 }

 public function select($table_name)
      {
           $array = array();
           $query = "SELECT * FROM ".$table_name."";
           $result = mysqli_query($this->con, $query);
           while($row = mysqli_fetch_assoc($result))
           {
                $array[] = $row;
           }
           return $array;
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


      public function required_validation($field)
           {
                $count = 0;
                foreach($field as $key => $value)
                {
                     if(empty($value))
                     {
                          $count++;
                          $this->error .= "<p>" . $key . " is required</p>";
                     }
                }
                if($count == 0)
                {
                     return true;
                }
           }

      public function login($table_name, $where_condition)
            {
                 $condition = '';
                 foreach($where_condition as $key => $value)
                 {
                      $condition .= $key . " = '".$value."' AND ";
                 }
                 $condition = substr($condition, 0, -5);
                 /* will convert array to string like this-
                 input - array(
                      'id'     =>     '5'
                 )
                 output = id = '5'*/
                 $query = "SELECT * FROM ".$table_name." WHERE " . $condition;
                 $result = mysqli_query($this->con, $query);
                 if(mysqli_num_rows($result))
                 {
                      return true;
                 }
                 else
                 {
                      $this->error = "Wrong Data";
                 }
            }



function CloseCon($conn)
 {
 $conn -> close();
 }
}
?>
