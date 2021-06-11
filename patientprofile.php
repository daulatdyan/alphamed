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
<td> <a href="patientprofile.php"><h3> Profile<h3></a></td>
<td> <a href="docf.php"> <h3>Doctors </h3></a></td>
<td> <a href="patientappoint.php"><h3>Appointment </h3></a></td>
<td> <a href="contactpatient.php"> <h3>Contact </h3></a></td>
<td> <a href="logout.php">Logout </h3></a></td>
</tr>

<tr>
<td colspan="5"  >
<h2 align="center">Important</h2> <br><br><br>
<b> Welcome to your Portal user!</b> <br><br>

<?php

$sql="select * from patientregistration where username='$_SESSION[username]'";
$result= mysqli_query($connect,$sql);
$p=mysqli_fetch_array($result,MYSQLI_ASSOC);
echo "<br><b>Full Name: </b>".$p['name'];
echo "<br><b>Registered ID: </b>".$p['id'];
echo "<br><b>Gender:</b> ".$p['gender'];
echo "<br><b>Date of Birth: </b>".$p['dob'];
echo "<br><b>Phone: </b>".$p['mobile'];
echo "<br><b>Email Address: </b>".$p['email'];
echo "<br><b>Address: </b>".$p['address'];

?>
<br><br>
<a href="regpatientpofedit.php?eid=<?php echo $p['id'];?>">Edit</a>


</tr>

<tr>
<td colspan="5" align="center">
<br><b>Notice: we will give you a call to confirm your registration, and will let you know your appointment time. You will get to see your allotted time in Appointment Menu. </b> <br><br>
Get an appointment now: <br><br>

<form action="action.php" method="post">

  Registered ID:
  <input type="text" id="regid" name="regid" ><br><br>
      
  <label for="cars">Choose your Doctor:</label>
  <select id="cars" name="cars">
    <option value="Dr. A"> Dr. A</option>
    <option value="Dr. B">Dr. B</option>
    <option value="DR. C">Dr. C</option>
  </select>
  
  <br><br>
  Describe Your symptom:<br>
    <textarea name="message" rows="10" cols="30">Describe here.</textarea>
  <br><br>
  <input type="submit"  name="choosedoctor" value="Choose Doctor">
</form>


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