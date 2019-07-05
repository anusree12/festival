<?php
include("dbconnect.php");
$a=mysqli_real_escape_string($conn,$_REQUEST['area']);
$sql="INSERT INTO tbl_area(area) VALUES('$a')";
//echo "haaiii";
if(mysqli_query($conn,$sql))
{
	header("location:area.php");
	
}
mysqli_close($conn);
?>