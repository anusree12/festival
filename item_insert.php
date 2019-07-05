<?php
include("dbconnect.php");
$a=mysqli_real_escape_string($conn,$_REQUEST['items']);
$b=mysqli_real_escape_string($conn,$_REQUEST['program']);
$c=mysqli_real_escape_string($conn,$_REQUEST['part']);
$sql="INSERT INTO tbl_items(items,program,part) VALUES('$a','$b','$c')";
//echo "haaiii";
if(mysqli_query($conn,$sql))
{
	header("location:items.php");
	
}
mysqli_close($conn);
?>