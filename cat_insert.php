<?php
include("dbconnect.php");
$a=mysqli_real_escape_string($conn,$_REQUEST['category']);
$sql="INSERT INTO tbl_category(category) VALUES('$a')";
//echo "haaiii";
if(mysqli_query($conn,$sql))
{
	header("location:category.php");
	
}
mysqli_close($conn);
?>