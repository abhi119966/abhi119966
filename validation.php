<?php

session_start();


require ("connection.php");

if(isset($_POST['login']))
	
	{
		
		$user=$_POST['user'];
		$password=md5($_POST['password']);
	
		
		
		
		$q = "select * from regi where user ='$user' && password='$password'";
		
$result=mysqli_query($link,$q);
$array=mysqli_fetch_assoc($result);
$num=mysqli_num_rows($result);
if($num==1)
{
	$_SESSION['name']= $array['name'];
	$_SESSION['contact']= $array['contact'];
	$_SESSION['email']= $array['email'];
	$_SESSION['gender']= $array['gender'];
	$_SESSION['user']=$array['user'];
	$_SESSION['password']=$array['password'];
	$_SESSION['id']= $array['id'];
	$_SESSION['dob']= $array['dob'];
	$_SESSION['address']= $array['address'];
	$_SESSION['attach'] =$array['attach'];
	$_SESSION['login'] = $array['login'];
	
	header("Location:index.php");
	
}	
	
else{
		header("Location:loginRegisterPage.php");
	} 
	}
	

?>