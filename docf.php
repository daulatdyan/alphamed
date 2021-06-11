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




<table border="0" style="width:100%" height="800">

<tr class="a">
<td colspan="5">
<strong>Important Notice to Patients Regarding the Coronavirus Outbreak
Please read our update on the growing spread of the novel coronavirus, COVID-19 and our response, recommendations and commitments to our patients.</strong>
</td>
</tr>


<tr align="center" class="b">
<td width="200"> <a href="patientprofile.php"><h3> Profile<h3></a></td>
<td width="200"> <a href="docf.php"> <h3>Doctors </h3></a></td>
<td width="200"> <a href="patientappoint.php"><h3>Appointment </h3></a></td>
<td> <a href="contactpatient.php"> <h3>Contact </h3></a></td>
<td> <a href="logout.php">Logout </h3></a></td>
</tr>

<tr  >
<!-- <td width="300">
</td> -->
<td  style="padding-left: 100px;" width="300">

<img src="d1.jpg" height="200" width="200"> <br>
<h2>Dr. A</h2>
</td>

<td align="center" width="500">
<h1>Degree</h1>
MBBS, MD (Cardiology) <br>

Fellow: HPSP (Thailand, Philipine), Fellow: WHO (India)<br>

Trained in Interventional Cardiology <br>

Associate Proferssor (Cardiology) <br>

Heart Diseases, Rheumatic Fever, Hypertension & Medicine Specialist <br>

Ex- National Institute of Cardiovascular Diseases and Hospital <br>

Sher-E-Bangla Nagar, Dhaka
</td>
<td align="center" colspan="5" width="600">
<h1>Department Of: Cardiology</h1> <br>
Associate Professor
</td>
 
 <!-- <td width="70">
 </td> -->
</tr>



<tr >
<!-- <td width="300">
</td> -->
<td  style="padding-left: 100px;">

<img src="d2.jpg" height="200" width="200"> <br>
<h2>DR. B</h2>
</td>

<td align="center" width="200">
<h1>Degree</h1>
MBBS (DMC), FCPS (Gynae), MS (Gynae)  Post Fellowship Training-Advanced Laparoscopic  Gynaecology (Mumbai, Pune, India) <br>
Associate Professor  Gynae & Obs and Laproscopic Surgeon  Shaheed Shohrawardi Medical Collage & Hospital 
</td>
<td align="center" colspan="5">
<h1>Department Of: Gyane & Obs.</h1> <br>
Assistant Professor
</td>
 
 <!-- <td width="70">
 </td> -->
</tr>





<tr  >
<!-- <td width="300">
</td> -->
<td  style="padding-left: 100px;">

<img src="d3.jpg" height="200" width="200"> <br>
<h2>Dr. C</h2>
</td>

<td align="center" width="200">
<h1>Degree</h1>
MBBS, MD(Hepatology)  Special Training On Liver & Gastroenterology (Chenni, India)  <br>
Associate Professor & Head of the Department   Dept. Of Hepatology  Shaheed Tajuddin Ahmad Medical College, Hospital
</td>
<td align="center" colspan="5">
<h1>Department Of: Medicine</h1> <br>
Associate Professor
</td>
 
 <!-- <td width="70">
 </td> -->
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