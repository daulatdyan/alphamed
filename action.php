<?php
error_reporting(E_ALL^E_NOTICE);
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$db="alphamed";
$connect=mysqli_connect($servername, $username, $password,$db);

extract($_POST);


if($_POST['register']=="Add Doctor"){
$dsql="insert into docregistration(id,name,username,password,gender,dob,address,mobile,email,degree) values(null,'$_POST[name1]','$_POST[username1]','$_POST[pass]','$_POST[gender1]','$_POST[dob1]','$_POST[address1]','$_POST[mobile1]','$_POST[email1]','$_POST[degree]')";
mysqli_query($connect,$dsql);
session_start();
$_SESSION['msg']="Successfully Submitted";
header("Location:reg.php");

}


if($_POST['register2']=="Add Patient"){
$psql="insert into patientregistration(id,name,username,password,gender,dob,address,mobile,email) values(null,'$_POST[name2]','$_POST[username2]','$_POST[pass2]','$_POST[gender2]','$_POST[dob2]','$_POST[address2]','$_POST[mobile2]','$_POST[email2]')";
mysqli_query($connect,$psql);
session_start();
$_SESSION['msg']="Successfully Submitted";
header("Location:reg.php");

}

if($_POST['logdoc']=="Login Doctor"){
	if($_POST['username']=="" or $_POST['password']==""){
		session_start();
		$_SESSION['msg']="Please fill the gaps";
		header("Location:login.php");
	}
	else{
		$lsql="select * from docregistration where username='$_POST[username]' and password='$_POST[password]'";
		$sql=mysqli_query($connect,$lsql);
		$count=mysqli_num_rows($sql);
		if($count==1){
			$_SESSION['username']=$_POST['username'];
			$_SESSION['password']=$_POST['password'];
			header("Location:docprofile.php");
			}
		else{
			session_start();
			$_SESSION['msg']="Your password or name is wrong";
			header("Location:login.php");
		}
	}
}
if($_POST['logpatient']=="Login Patient"){
	if($_POST['username']=="" or $_POST['password']==""){
		session_start();
		$_SESSION['msg']="Please fill the gaps";
		header("Location:login.php");
	}
	else{
		$lsql="select * from patientregistration where username='$_POST[username]' and password='$_POST[password]'";
		$sql=mysqli_query($connect,$lsql);
		$count=mysqli_num_rows($sql);
		if($count==1){
			$_SESSION['username']=$_POST['username'];
			$_SESSION['password']=$_POST['password'];
			header("Location:patientprofile.php");
			}
		else{
			session_start();
			$_SESSION['msg']="Your password or name is wrong";
			header("Location:login.php");
		}
	}
}
//edit patient profile
if($_POST['edit']=="Edit Patient"){
	
	$esql="update patientregistration set name='$_POST[name3]',username='$_POST[username3]', password='$_POST[pass3]',gender='$_POST[gender3]',dob='$_POST[dob3]', address='$_POST[address3]',mobile='$_POST[mobile3]', email='$_POST[email3]' where id='$_GET[eid]'";
	mysqli_query($connect,$esql);
	
	session_start();
	$_SESSION['msg']="Successfully Edited";
	header("Location:patientprofile.php");
}


?>