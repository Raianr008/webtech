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

function validateform()
{
    var username=document.getElementById("username").value;

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


    if(password=="")
    {
        document.getElementById("pass_message").innerHTML="password must not be empty";
        return false;
    }
    else if(password.length<8)
    {
        document.getElementById("pass_message").innerHTML="Atleast 8 character required";
        return false;
    }
    else
    {


            document.getElementById("pass_message").innerHTML="ok";

    }





}
