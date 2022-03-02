function MyAjaxFunc()
{
    var username=document.getElementById("username").value;
  //var lname=document.getElementById("lname").value;

    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200)
        {
            document.getElementById("demo").innerHTML = this.responseText;
        }
        else
        {
            document.getElementById("demo").innerHTML = this.status;
        }
    };
    xhttp.open("POST", "../control/myphp.php", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send("username="+username);
}



/*
function MyAjaxFunc(){
	var  username = document.getElementById('username').value;
	var xhttp	= new XMLHttpRequest();


    xhttp.open('POST', '../control/myphp.php?username='+username, true);
      xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xhttp.send("username="+username);

	xhttp.onreadystatechange = function(){

		if(this.readyState == 4 && this.status == 200){

			document.getElementById('demo').innerHTML = this.responseText;
		}
	}
}
*/
