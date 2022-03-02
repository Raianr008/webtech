
function user (inputtxt){
    var letters = /^[A-Za-z-0-9]+$/;
    if(letters.test(inputtxt))
    {
        return true;
    }
    else
    {
        return false;
    }

}

function phoneno (inputtxt){
    var letters = /^[A-Za-z-0-9]+$/;
    if(letters.test(inputtxt))
    {
        return true;
    }
    else
    {
        return false;
    }

}

function allLetter(inputtxt)
{
    var letters = /^[A-Za-z]+$/;
    if(letters.test(inputtxt))
    {
        return true;
    }
    else
    {
        return false;
    }
}

function matchemail(inputtext)
{
    var patt = /^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/;
    if(patt.test(inputtext))
    {
        return true;
    }
    else
    {
        return false;
    }
}

function allnumber(inputnum)
{
    if(isNaN(inputnum)==false)
    {
        return true;
    }
    else
    {
        return false;
    }
}

function validateform()
{
    var username=document.getElementById("username").value;
    var fname=document.getElementById("fname").value;
    var lname=document.getElementById("lname").value;
    var email=document.getElementById("email").value;
    var number=document.getElementById("number").value;
    var gender="";
    //var age=document.getElementById("age").value;
    var password=document.getElementById("password").value;


    if(username=="")
    {
        document.getElementById("Username_message").innerHTML="username name must not be empty";
        return false;
    }
    else if(username.length<6)
    {
        document.getElementById("Username_message").innerHTML="Atleast 6 character required";
        return false;
    }
    else
    {
        if(user(username)==false)
        {
            document.getElementById("Username_message").innerHTML="Only alphabet and numbers required";
            return false;
        }
        else
        {
            document.getElementById("Username_message").innerHTML="";
        }
    }

    if(fname=="")
    {
        document.getElementById("message_fname").innerHTML="First name must not be empty";
        return false;
    }
    else if(fname.length<4)
    {
        document.getElementById("message_fname").innerHTML="Atleast 5 alphabet required";
        return false;
    }
    else
    {
        if(allLetter(fname)==false)
        {
            document.getElementById("message_fname").innerHTML="Only alphabet required";
            return false;
        }
        else
        {
            document.getElementById("message_fname").innerHTML="";
        }
    }




    if(lname=="")
    {
        document.getElementById("message_lname").innerHTML="Last name must not be empty";
        return false;
    }
    else if(lname.length<4)
    {
        document.getElementById("message_lname").innerHTML="Atleast 5 alphabet required";
        return false;
    }
    else
    {
        if(allLetter(lname)==false)
        {
            document.getElementById("message_lname").innerHTML="Only alphabet required";
            return false;
        }
        else
        {
            document.getElementById("message_lname").innerHTML="";
        }
    }

    if(email=="")
    {
        document.getElementById("message_email").innerHTML="Email must not be empty";
        return false;
    }
    else
    {
        if(matchemail(email)==false)
        {
            document.getElementById("message_email").innerHTML="Enter a valid email";
            return false;
        }
        else
        {
            document.getElementById("message_email").innerHTML="";
        }
    }


    if(number=="")
   {
       document.getElementById("message_number").innerHTML="phone  must not be empty";
       return false;
   }
   else
   {
       if(allnumber(number)==false)
       {
           document.getElementById("message_number").innerHTML="phoneno must be integer";
           return false;
       }
       else
       {
           document.getElementById("message_number").innerHTML="";
       }
   }


    if(document.getElementById("gender").checked== false)
   {
   document.getElementById("message_gender").innerHTML ="Radio must be filled out";
      return false;
   } else {
      return true;
    }



    if(age=="")
    {
        document.getElementById("Username_message").innerHTML="username name must not be empty";
        return false;
    }
    else if(age.length<6)
    {
        document.getElementById("Username_message").innerHTML="Atleast 6 character required";
        return false;
    }
    else
    {
        if(user(age)==false)
        {
            document.getElementById("Username_message").innerHTML="Only alphabet and numbers required";
            return false;
        }
        else
        {
            document.getElementById("Username_message").innerHTML="";
        }
    }









    if(password=="")
    {
        document.getElementById("message_password").innerHTML="Password must not be empty";
        return false;
    }
    else
    {
        if(password.length<8)
        {
            document.getElementById("message_password").innerHTML="Atleast 8 character required";
            return false;
        }
        else
        {
            document.getElementById("message_password").innerHTML="";
     }
   }

    return false;
}
