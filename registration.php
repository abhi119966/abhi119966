<?php

session_start();
header("Location:loginRegisterPage.php");

require ("connection.php");

if(isset($_POST['register']))
	
	{
		$name=$_POST['name'];
		$_SESSION['myname']=$name;
		$contact=$_POST['contact'];
		$email=$_POST['email'];
		$user=$_POST['user'];
		$password=$_POST['password'];
		$myPassword=md5($password);
		$gender=$_POST['gender'];
		$dob=$_POST['dob'];
		
		/*$photo=$_FILES['attach']['name'];
		$tmp=$_FILES['attach']['tmp_name'];
		if($photo!='')
		{
			$path="uploads/".$photo;
			move_uploaded_file($tmp,$path);
		}
		else
		{
			$path='';
		}*/
		$address=$_POST['address'];
		
		
	
		$q = "select * from regi where user ='$user' && email='$email'";
$result=mysqli_query($link,$q);
$num=mysqli_num_rows($result);
if($num==1)
{
	echo "duplicate data";
}	
	
else{
	
		
		$query="insert into regi (name,contact,email,user,password,gender,dob,address) values 
								('$name','$contact','$email','$user','$myPassword','$gender','$dob','$address')";
								
		$run=mysqli_query($link,$query);
		if($run)
		{
			$msg = "successfully     added";
			header("Location:loginRegisterPage.php?msg=$msg");
		}
		else{
			echo mysqli_error($link);
		}
		
	}
	
	}
	
	elseif(isset($_POST['update']))
	{
		session_destroy();
		$id=$_POST['id'];
		$name=$_POST['name'];
		$contact=$_POST['contact'];
		$email=$_POST['email'];
		$user=$_POST['user'];
		$password=$_POST['password'];
		
		$gender=$_POST['gender'];
		$dob=$_POST['dob'];
		
	/*
	$photo=$_FILES['attach']['name'];
		$tmp=$_FILES['attach']['tmp_name'];
		if($photo!='')
		{
			$path="uploads/".$photo;
			move_uploaded_file($tmp,$path);
		}
		else
		{
			$path='';
		}
		*/
		$address=$_POST['address'];
		$query="UPDATE regi SET name='$name',contact='$contact',email='$email',user='$user',password='$password',gender='$gender',dob='$dob',address='$address' where id='$id'";						
		$run=mysqli_query($link,$query);
		if($run)
		{
			$msg = "successfully Updated please Login again";
			
			header("Location:loginRegisterPage.php?msg=$msg");
		}
		else{
			echo mysqli_error($link);
		}
	}
	else
	{
		header("Location:editProfile.php");
	}

?>