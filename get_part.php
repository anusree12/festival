<?php
function getPart($conn,$itm)
{
	$sql="SELECT part FROM tbl_items WHERE items='$itm'";
	$result=mysqli_query($conn,$sql);
	if($result->num_rows>0)
	{
		$result=$result->fetch_array();
		return $result[0];
	}
	else 
	{
		return false;
	}

}
?>