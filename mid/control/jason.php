<?php

if($_SERVER["REQUEST_METHOD"]=="POST")
{
	   //Get form data
	   $formdata = array(
	      'username'=> $_POST["username"],
	      'fname'=> $_POST["fname"],
	      'email'=>$_POST["email"],
	      'dob'=>$_POST["dob"],
	      'password'=>$_POST["password"],
	      'gender'=> $_POST["gender"],
	      'number'=> $_POST["number"]
	   );
       $existingdata = file_get_contents('data.json');
       $tempJSONdata = json_decode($existingdata);
       $tempJSONdata[] =$formdata;
       //Convert updated array to JSON
	   $jsondata = json_encode($tempJSONdata, JSON_PRETTY_PRINT);

	   //write json data into data.json file
	   if(file_put_contents("data.json", $jsondata)) {
	        echo "Data successfully saved to json file<br>";
	    }
	   else
	        echo "no data saved";

     $data = file_get_contents("data.json");
	 $mydata = json_decode($data);


	 //echo "my value: ".$mydata[1]->lastName;
/*	 foreach($mydata as $myobject)
	 {
	 foreach($myobject as $key=>$value)
	{
		echo "your ".$key." is ".$value."<br>";
	}
	}
	*/

}
?>
