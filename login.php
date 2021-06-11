<?php
error_reporting(E_ALL^E_NOTICE);
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$db="alphamed";
$connect=mysqli_connect($servername, $username, $password,$db);


echo $_SESSION['msg'];
$_SESSION['msg']="";
?>
<html>

<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta content="text/html; charset=iso-8859-2" http-equiv="Content-Type">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js"></script>
	<link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>


<style>

.header {
  position: fixed;
  top: 0;
  z-index: 1;
  width: 100%;
  background-color: #0099cc;
 background: linear-gradient(to bottom, #0099ff 0%, #33ccff 100%);
}
.header strong {
  text-align: center;
}

.portal {
    top: 38;
  position: fixed;
  z-index: 1;
   width: 100%;
  background-color: #0066ff;


}

.logo{
    top: 88;
  position: fixed;
  z-index: 1;
   width: 100%;
  background-color: white;
  background: linear-gradient(to left, #66ccff 0%, #ffffff 100%);
 
}
 
 .logo img{
 border-radius: 50%;
 height:185;
 width:200;
 }
 .menu {
     top: 279;
  position: fixed;
  z-index: 1;
   width: 100%;
  background-color: #0066ff;
 
 
 }
 
 .content{

   padding: 120px ;
  width: 100%;
  border: collapse; 
 }
 
 .mySlides {display:none;}
 
.search-container button {
  float: right;
  padding: 6px 10px;
  margin-top: 8px;
  margin-right: 16px;
  background: #ddd;
  font-size: 10px;
  border: none;
  cursor: pointer;
}


h1 {
  color: maroon;
}

.a{
background: linear-gradient(to left, #3366ff 0%, #ffffff 100%);
}

.b{
 background: linear-gradient(to right, #3366ff 0%, #ffffff 100%);
}


.c{
background: linear-gradient(to right, #3366ff 0%, #ffffff 100%);
}

.d{
background: linear-gradient(to left, #3366ff 0%, #ffffff 100%);
border:0px;
}

.e{
border-radius: 50%;
}


.f{
border-radius: 50%;
}

.g{
border-radius: 50%;
}

.i{
background: linear-gradient(to right, #3366ff 0%, #ffffff 100%);

}

.j{
background-color: #0099cc;
}






body {font-family: Arial, Helvetica, sans-serif;}
form {border: 0px solid #f1f1f1;}

input[type=text], input[type=password] {
  width: 60%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 20%;
  align-right: 40px;
}

button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
  align-left: 30px;
}

img.avatar {
  width: 20%;
  border-radius: 50%;
 
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }













</style>







</head>

<body>
<table border="0" style="width:100%" height="1500" >
<tr height="40">
<td colspan=5 align="center"><div class="header"> <div class="progress-container">
    <div class="progress-bar" id="myBar"></div><strong>Important Notice to Patients Regarding the Coronavirus Outbreak
Please read our update on the growing spread of the novel coronavirus, COVID-19 and our response, recommendations and commitments to our patients.</strong> </div> </div>  </td>

</tr>



<tr height="50" class="portal">
<!--<td  align="center" height="30" width="300"><strong><a href="doctor.html">Doctor potal</a></strong></td>-->

<td  style="float:right" height="30" width="300"> <strong> <a href="login.php">Login</a> </strong> </td>
<td style="float:right" height="30" width="300"> <strong><a href="reg.php">  Sign-Up</a> </strong> </td>

</tr>

<tr class="logo"   >
<td colspan="2" align="center" > <a href="index.html"> <img src="logo.jpg" ></a></td>
<td   align="center" width="900"  class="k"> <h1 style="font-size:80px;"> AlphaMed </h1></td>


<td align="center"> <strong>For an Emergency booking or for any Quarry <br>
Please call : +8801954407566 </strong> 

</td>
</tr>



<tr height="40" class=" menu">
<td align="center" height="35" width="270"><strong><a href="index.html">Home</strong></a></td>
<td align="center" height="35" width="270" ><strong><a href="about.html">About</strong></a></td>
<td align="center" height="35" width="270" ><strong><a href="docin.html">Doctors</strong></a></td>
<td align="center" height="35" width="270" ><strong><a href="contact.html">Contact</strong></a></td>
<td align="center" height="35" width="270" ><strong><a href="finance.html">Financial</strong></a></td>
</tr>






<tr  class="b">
<!-- <td width="200">
</td> -->
<td  style="padding-left: 500px;">

<h1>LogIn</h1>


<div id="header"></div>

	<!--top-->
	<form>
		<table>
			
			<tr>
				<td><input type="radio" id="regtable" name="regtable" checked="checked" value="mng"/>Doctor</td>
				<td><input type="radio" id="regtable" name="regtable" value="sup" />Patient</td>
			</tr>
		</table>
	</form>

	<!--login form for Doctor-->
	<form id="regmng" name="regmng" class="desc" method="post" action="action.php">
		<table>
        
        <tr>
        	<td>Username: </td>
        	<td><input type="text" id="username1" name="username" required id="msg"></p></td>
        </tr>
        <tr>
        	<td>Password: </td>
        	<td><input type="password" id="pass" name="password" required></td>
        </tr>
        
        <tr>
        	<td  colspan="2"><center><input type="submit" id="register" name="logdoc" value="Login Doctor"></center></td>
        </tr>
        </table>
    </form>
    
    <!--login form for Patient-->
    <form id="regsup" name="regsup" class="desc"  style="display: none;" method="post" action="action.php">
        <table>
        
        <tr>
        	<td>Username: </td>
        	<td><input type="text" id="username2" name="username" required </p></td>
        </tr>
        <tr>
        	<td>Password: </td>
        	<td><input type="password" id="pass2" name="password" required></td>
        </tr>
		
        <tr>
        	<td colspan="2"><center><input type="submit" id="register2" name="logpatient" value="Login Patient"></center></td>
        </tr>
        </table>
    </form>

</body>

</html>





<script>

function ajaxRequest() {
  var xhttp;
  if (window.XMLHttpRequest) {
    // code for modern browsers
    xhttp = new XMLHttpRequest();
    } else {
    // code for IE6, IE5
    xhttp = new ActiveXObject("Microsoft.XMLHTTP");
  }
  xhttp.onreadystatechange = function() {
    if (xhttp.readyState == 4) {
      document.getElementById("msg").innerHTML = xhttp.responseText;
    }
  };
  
  var username = document.getElementById("username").value;
  xhttp.open("GET", "check.php?username=" + username, true);
  xhttp.send();
}

function ajaxRequest2() {
  var xhttp;
  if (window.XMLHttpRequest) {
    // code for modern browsers
    xhttp = new XMLHttpRequest();
    } else {
    // code for IE6, IE5
    xhttp = new ActiveXObject("Microsoft.XMLHTTP");
  }
  xhttp.onreadystatechange = function() {
    if (xhttp.readyState == 4) {
      document.getElementById("msg2").innerHTML = xhttp.responseText;
    }
  };
  
  var username = document.getElementById("username").value;
  xhttp.open("GET", "check.php?username=" + username, true);
  xhttp.send();
}

$(document).ready(function(){ 

	$(function(){
  		$("#header").load("header.php");
	});

    $("input[name$='regtable']").click(function() {
        var test = $(this).val();
        
        $("form.desc").hide();
        $("#reg"+test).show();
    }); 
    
    $("select[name$='district']").click(function() {
        var test = $(this).val();
        
        $("select.thana").hide();
        $("#"+test).show();
    });

    $("select[name$='district2']").click(function() {
        var test = $(this).val();
        
        $("select.thana2").hide();
        $("#"+test+"2").show();
    });

	$("#regmng").validate({
                rules: {
                    name1: "required",
                    username1: "required",
                    pass: {
                        required: true,
                        minlength: 6,
                        maxlength: 16
                    },
                    
                    dob: {
                    	required: true,
                    	agecheck: true
                    },
                    
                    district: {
                    	selectcheck: true
                    },
                    mobile1: {
                   		required: true,
                   		minlength: 11,
                        maxlength: 11
                    },
                    email1: {
                        email1: true
                    }
                    

                },
                messages: {
                    name1: "<br/><p class='warning'>Please enter your name</p>",
                    username: "<br/><p class='warning'>Please enter your username</p>",
                    password: {
                        required: "<br/><p class='warning'>Please provide a password</p>",
                        minlength: "<br/><p class='warning'>Password must be at least 6 characters long</p>",
                        maxlength: "<br/><p class='warning'>Password must be at most 16 characters long</p>"
                    },
                   
                    dob: {
                    	required: "<br/><p class='warning'>Please set you Date</p>",
                    	agecheck: "<br/><p class='warning'>Your age has to be at least 16</p>"
                    },

                    district: {
                    	selectcheck: "<br/><p class='warning'>Please select a district</p>"
                    },
                    mobile1: {
                      	required: "<br/><p class='warning'>Please provide a mobile number</p>",
                    	minlength: "<br/><p class='warning'>Mobile number must be 11 characters long</p>",
                        maxlength: "<br/><p class='warning'>Mobile number must be 11 characters long</p>"
                    },
                    email1: {
                    	email: "<br/><p class='warning'>Please enter a valid email address</p>"
                	}
                },
                submitHandler: function(form) {
                    form.submit();
                }
            });

     $("#regsup").validate({
                rules: {
                    name2: "required",
                    username: "required",
                    password: {
                        required: true,
                        minlength: 6
                    },
					dob: {
                    	required: true,
                    	agecheck: true
                    },
					
                    district2: {
                    	selectcheck: true
                    },
                    mobile2: {
                   		required: true,
                   		minlength: 11
                    },
                    email2: {
                        email: true
                    }
                    

                },
                messages: {
                    name2: "<br/><p class='warning'>Please enter your name</p>",
                    username: "<br/><p class='warning'>Please enter your username</p>",
                    password: {
                        required: "<br/><p class='warning'>Please provide a password</p>",
                        minlength: "<br/><p class='warning'>Your password must be at least 6 characters long</p>"
                    },
					dob: {
                    	required: "<br/><p class='warning'>Please set you Date</p>",
                    	agecheck: "<br/><p class='warning'>Your age has to be at least 16</p>"
                    },
                    district2: {
                    	selectcheck: "<br/><p class='warning'>Please select a district</p>"
                    },
                    mobile2: {
                      	required: "<br/><p class='warning'>Please provide a mobile number</p>",
                    	minlength: "<br/><p class='warning'>Your password must be 11 characters long</p>"
                    },
                    email2: {
                    	email: "<br/><p class='warning'>Please enter a valid email address</p>"
                	}
                },
                submitHandler: function(form) {
                    form.submit();
                }
            });

    jQuery.validator.addMethod('selectcheck', function (value) {
        return (value != 'select');
    });

   	jQuery.validator.addMethod('agecheck', function (value) {
        var d = new Date();

		var month = d.getMonth()+1;
		var day = d.getDate();

		var output = (d.getFullYear()-16) + '-' +
   		(month<10 ? '0' : '') + month + '-' +
    	(day<10 ? '0' : '') + day;
    	//console.log(output);
        return (value < output);
    });

    

});
   
</script>

</td>
 
 <!-- <td width="70">
 </td> -->
</tr>











<tr>

<td colspan=5 align="center" class="i" height="80">
<img src="tw.png" height="80" width="80" class="e"><img src="fb.png" height="80" width="80" class="f"><img src="link.jpg" height="80" width="80" class="g">
</td>
</tr>

<tr class="j" height="40">
<td colspan=5 align="center"> <strong> 2020 Alpha Med Physicians Group, LLC. All rights reserved. | Website by Daulat Dyan</strong></td>

</tr>


</div>

</div> </div>




</table>


<script>
// When the user scrolls the page, execute myFunction 
window.onscroll = function() {myFunction()};

function myFunction() {
  var winScroll = document.body.scrollTop || document.documentElement.scrollTop;
  var height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
  var scrolled = (winScroll / height) * 100;
  document.getElementById("myBar").style.width = scrolled + "%";
}
</script>

<script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 8000); // Change image every 8 seconds
}
</script>





</body>

</html>