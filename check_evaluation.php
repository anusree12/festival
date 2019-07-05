<?php
function checkEvaluation($conn,$regid,$item)
{
	$sql="SELECT * FROM tbl_evaluation WHERE reg_id='$regid' and item='$item'";
	$result=mysqli_query($conn,$sql);
	if($result->num_rows>0)
	{
		return true;
	}
	else 
	{
		return false;
	}

}
?>