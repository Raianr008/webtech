<?php include "../control/adddoctor.php"; ?>


<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="../css/appoint.css">
   <title>Patients  Registration  </title>


    <body>
        <div class="appoinment">
    <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post" enctype="multipart/form-data">


          <center><h1>Add Doctor </h1></center>
                                  <table>
                                    <tr>
                                        <td>Doctor's Name </td>
                                        <td> <input type ="text" class="c2" name="sname" width="200px" id="nm1" >  </input></td>
                                        <td><font color="red" id="sts1"> .</font></td>
                                        </tr>




                                    <tr>
                                        <td>Qualifucations </td>
                                        <td><input type ="text" class="c2" name="pname" width="200px" id="nm1" > </input> </input></td>
                                        <td><font color="red" id="sts"> .</font></td>
                                        </tr>



                                    <tr>
                                        <td>Specialist In </td>
                                        <td><input type ="text" class="c2" name="email" width="200px" id="em1" ></input> </td>
                                        <td><font color="red"id="sts2" > .</font>
                                        </td>
                                          </tr>







                <tr>


                    <td>
                        <input type="submit" name="submit" class="c1" value="Submit" >


                    </td>



                </tr>
                <tr>
                  <td>  <a href="dashboard.php"><b>Go back to dashboard</b></a> </td>
                  <td>   <a href="doctor.php"><b>Go Back to doctor's List</b></a> </td>
                </tr>

                        </table>



                            </form>
                       </div>


</body>
</html>
