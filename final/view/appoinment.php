<?php include "../control/appointvalidation.php"; ?>


<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="../css/appoint.css">
   <title>Patients  Registration  </title>


    <body>
        <div class="appoinment">
    <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post" enctype="multipart/form-data">


          <center><h1>Patient Registration</h1></center>
                                  <table>
                                    <tr>
                                        <td>Serial No </td>
                                        <td> <input type ="number" class="c2" name="sname" width="200px" id="nm1" >  </input></td>
                                        <td><font color="red" id="sts1"> .</font></td>
                                        </tr>




                                    <tr>
                                        <td>Patient's Name </td>
                                        <td><input type ="text" class="c2" name="pname" width="200px" id="nm1" > </input> </input></td>
                                        <td><font color="red" id="sts"> .</font></td>
                                        </tr>



                                    <tr>
                                        <td>Email </td>
                                        <td><input type ="text" class="c2" name="email" width="200px" id="em1" ></input> </td>
                                        <td><font color="red"id="sts2" > .</font>
                                        </td>
                                          </tr>


                                     <tr>
                                        <td>Patient's Problem </td>
                                        <td> <textarea name="prob" rows="8" cols="80"></textarea> </td><br>
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
