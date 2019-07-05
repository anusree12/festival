<!DOCTYPE html>
<html>
<head>
	<title>Gokulolsavam</title>
	<link rel="stylesheet" type="text/css" href="custom.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Satisfy&display=swap" rel="stylesheet">
	<style type="text/css">
  
    body{
			font-family: 'Roboto', sans-serif;

		}
	.tbl 
		{
        
        margin-left:183px; 
       }
    .user
    {
    	margin-left: 200px;
    }
	.del
	{
		color: blue;
		text-decoration: underline;
		cursor: pointer;
	}	
	
	
</style>
</head>
<body>
	
	<div id="reg">
		<form method="POST" action="">
			<table align="center"> 
			<tr>
			<td colspan="2" align="center"><h2>Search User</h2></td>
		</tr><tr></tr><tr></tr><tr></tr>
			<tr>
				
				<td>Search By Register Id</td>
				<td><input type="text" name="regid"></td>
			</tr><tr></tr><br><br>
			
			<tr>
				<td></td>
				<td><input type="submit" name="submit" value="Search" class="bt"></td><br>
			</tr>
		</table>
		</form>	

	<div id="user" style="margin-top: 30px;">
	<?php
	include("dbconnect.php");
if (!empty($_REQUEST['regid'])) 
{
    $regid = mysqli_real_escape_string($conn,$_REQUEST['regid']);     
    $sql = "SELECT * FROM tbl_registration WHERE regid ='$regid'"; 
    
$result=$conn->query($sql);
if($result->num_rows>0)
{
	echo "<table align=center class=tbl> ";
	while ($row=$result->fetch_assoc())
		   	{
		   		$id=$row['id'];
		    echo "<tr><h2 class=user>User Details</h2></tr>
		    <tr ><td><b>Reg Id</b><td><td></td>
		    <td>".$row['regid']."</td></tr>
		    <tr><td><b>Name</b><td><td></td>
		    <td>".$row['name']."</td></tr>
		    <tr><td><b>Category</b><td><td></td>
		    <td>".$row['category']."</td></tr>
		    <tr><td><b>Area</b><td><td></td>
		    <td>".$row['area']."</td></tr>
		    <tr><td><b>Items</b><td><td></td>
		    <td>".$row['items']."</td></tr>
		    <tr><td><b>Action<b><td><td></td>
		    <td><a href=reg_edit.php?id=".$row['id'].">Edit
		   				<a  onclick='sure($id);' class=del>Delete</td></tr>";

		   	
		   				
		  	}
		   	echo "</table>";
}


}

?>
</div>
</div>
</div>

<script type="text/javascript">
	
	function sure(id)
  {
  	if(confirm("Are you sure to delete?"))
  	{
  		// alert("id"+id);
  		window.location = "reg_delete.php?id="+id;
  		// href=reg_delete.php?id=".$row['id']."
  	}
  }
</script>

</body>
</html>

