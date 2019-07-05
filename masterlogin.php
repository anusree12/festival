<?php
	session_start();
	include('dbconnect.php');
	if($_SERVER["REQUEST_METHOD"] == "POST")
	 {
 
		$a=$_POST['user'];
		$b=$_POST['pswd'];
 //print_r($a);
		$query=mysqli_query($conn,"SELECT * FROM tbl_master WHERE username='$a' and password='$b'");
		if (mysqli_num_rows($query)<1)
		{
			$_SESSION['msg']="Login Failed, User not found!";
			header('location:master.php');
	    }
		else
		{
			$row=mysqli_fetch_array($query);
			$_SESSION['id']=$row['id'];
			
			header('location:masterhome.php');
		}
	}
 
?>