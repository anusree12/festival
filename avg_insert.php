<?php
	$a=$_REQUEST['jdg1'];
	$b=$_REQUEST['jdg2'];
	$c=$_REQUEST['jdg3'];
	$name=$_REQUEST['name'];
	$reg_id=$_REQUEST['regid'];
	$totl= $a+$b+$c;
	$avg=$totl/3;
include("dbconnect.php");
$sql="INSERT INTO tbl_evalution(reg_id,name,jdg1,jdg2,jdg3,avg)VALUES(".$row['regid'].",".$row['name'].",'$a','$b','$c','$avg')";
if(mysqli_query($conn,$sql))
	{
		//header("location:registration.php"?task="Successfully Added");
		
	}
?>
	