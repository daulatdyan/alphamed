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
<table border="0" style="width:100%" height="700" >
<tr height="40">
<td colspan=5 align="center"><div class="header"> <div class="progress-container">
    <div class="progress-bar" id="myBar"></div><strong>Important Notice to Patients Regarding the Coronavirus Outbreak
Please read our update on the growing spread of the novel coronavirus, COVID-19 and our response, recommendations and commitments to our patients.</strong> </div> </div>  </td>

</tr>



<tr height="50" class="portal">
<td  align="center" height="30" width="300"><strong> <a href="doctor.html"> Doctor potal</a></strong></td>
<td  align="center" height="30" width="300"> <strong> <a href="pnt.html"> Patient portal </a></strong> </td>
<td  align="center" height="30" width="300"> <strong> <a href="reg.html"> Sign-Up </strong> </a></td>

</tr>

<tr class="logo"   >
<td colspan="2" align="center" > <a href="index.html"> <img src="logo.jpg" > </a></td>
<td   align="center" width="900"  class="k"> <h1 style="font-size:80px;"> AlphaMed </h1></td>


<td align="center"> <strong>For an Emergency booking or for any Quarry <br>
Please call : +8801954407566 </strong> 

</td>
</tr>



<tr height="40" class=" menu">
<td align="center" height="35" width="270"><strong><a href="index.html">Home</a></strong></td>
<td align="center" height="35" width="270" ><strong><a href="about.html">About</strong></a></td>
<td align="center" height="35" width="270" ><strong><a href="docin.html">Doctors</strong></a></td>
<td align="center" height="35" width="270" ><strong><a href="contact.html">Contact</strong></a></td>
<td align="center" height="35" width="270" ><strong><a href="finance.html">Financial</strong></a></td>
</tr>




<div class="content" width="100%" >
<tr> 
<td colspan=5> <div class="w3-content" style="max-width:100%; margin-top: 16px;">
  <img class="mySlides" src="b1.jpg" style="width:100%" >
  <img class="mySlides" src="b2.jpg" style="width:100%" >
  <img class="mySlides" src="b3.jpg" style="width:100%" >
</div> </td>
</tr>



<tr  class="b">
<!-- <td width="300">
</td> -->
<td  style="padding-left: 300px;">

<h2 style="padding-left: 300px;"  > Patient Login</h2>

<form action="action.php" method="post">
  <div class="imgcontainer"  style="padding-left: 320px;">
    <img src="avatar.jpg" alt="Avatar" class="avatar" height="130" width="60"  align="left"  >
  </div>
<br><br><br><br><br><br><br><br><br>
  <div class="container">
    Username</b>
    <input type="text" placeholder="Enter Username" name="username" required>
<br><br>
    Password</b>
    <input type="password" placeholder="Enter Password" name="password" required>
	
	<br><br>
        
    <input type="Submit" name="action" value="Login"> <br><br>
	
	
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn">Cancel</button>
    <span class="psw" align="left">Forgot <a href="#">password?</a></span>
  </div>
</form>



</td>
 
 <!-- <td width="70">
 </td> -->
</tr>











<tr>

<td colspan=5 align="center" class="i">
<img src="tw.png" height="80" width="80" class="e"><img src="fb.png" height="80" width="80" class="f"><img src="link.jpg" height="80" width="80" class="g">
</td>
</tr>

<tr class="j">
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