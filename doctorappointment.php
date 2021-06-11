<?php
error_reporting(E_ALL^E_NOTICE);
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$db="alphamed";
$connect=mysqli_connect($servername, $username, $password,$db);

if($_SESSION['username']!="" and $_SESSION['password']!=""){

?>

<html>
<head>
<style>
.a{
background-color: #0099cc;
 background: linear-gradient(to bottom, #0099ff 0%, #33ccff 100%);
}

.b{
background-color: #0066ff;
}

.c{
background-color: #0099cc;
 background: linear-gradient(to bottom, #0099ff 0%, #33ccff 100%);
}


</style>

</head>
<body>



<table border="1" style="width:100%" height="500">

<tr class="a">
<td colspan="5">
<strong>Important Notice to Patients Regarding the Coronavirus Outbreak
Please read our update on the growing spread of the novel coronavirus, COVID-19 and our response, recommendations and commitments to our patients.</strong>
</td>
</tr>


<tr align="center" class="b">
<td> <a href="docpro.html"><h3> Profile<h3></a></td>
<td> <a href="docpatientlist.php"> <h3> Patient List </h3></a></td>
<td> <a href="doctorappointment.php"><h3>Appointment </h3></a></td>
<td> <a href="contactdoc.php"> <h3>Contact </h3></a></td>
<td> <a href="logout.php">Logout </h3></a></td>
</tr>

<tr>
<td colspan="5"  >
<h2 align="center">Your appointments Today:</h2> <br><br><br>
<b> Name & time:</b> <br><br>





</td>

</tr>





<tr>
<td colspan="5" align="center" class="c">
2020 Alpha Med Physicians Group, LLC. All rights reserved. | Website by Daulat Dyan
</td>


</tr>


</table>





</body>







</html>


<?php
}
else{
	
	$_SESSION['msg']="You cannot access this page";
	header("Location:login.php");
}
?>