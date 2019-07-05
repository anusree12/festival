
<?php
include("dbconnect.php");

$a=mysqli_real_escape_string($conn,$_REQUEST['regid']);
$b=mysqli_real_escape_string($conn,$_REQUEST['name']);
$c=mysqli_real_escape_string($conn,$_REQUEST['category']);
$d=mysqli_real_escape_string($conn,$_REQUEST['area']);
// $e=mysqli_real_escape_string($conn,$_REQUEST['items']);
$e=implode(",",$_REQUEST['items']);

$sql="INSERT INTO tbl_registration(regid,name,category,area,items)VALUES('$a','$b','$c','$d','$e')";

if(mysqli_query($conn,$sql))
	{
		//$msg="Successfully Registred";
		header('location:registration.php');
		
	}

	
	
	else
	{
		$msg="failed";
	}

?>