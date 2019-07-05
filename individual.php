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
        border-collapse: collapse !important;
        border:1px solid grey !important;
    	}

    #ind
    {
    	 margin-top: 50px;
    	 float: left;
    	
    	 width: 360px;
    	 height:140px;

    }
	.ttl
	{
		width: 175px;
		height: 80px;
	}	
	
	
</style>
</head>
<body>
	
	<div id="reg">
		<form method="POST" action="">
			<table align="center"> 
			<tr>
			<td colspan="2" align="center"><h2>Individual Score</h2></td>
		</tr><tr></tr><tr></tr><tr></tr>
			<tr>
				
				<td>Search By Register Id</td>
				<td><input type="text" name="reg_id"></td>
			</tr><tr></tr><br><br>
			
			<tr>
				<td></td>
				<td><input type="submit" name="submit" value="Search" class="bt"></td><br>
			</tr>
		</table>
		</form>	

	<div id="ind">
	<?php
	include("dbconnect.php");
	include("get_part.php");
if (!empty($_REQUEST['reg_id'])) 
{
    $regid = mysqli_real_escape_string($conn,$_REQUEST['reg_id']);     
    $sql = "SELECT * FROM tbl_evaluation WHERE reg_id ='$regid'"; 
    
$result=$conn->query($sql);
if($result->num_rows>0)
{
	echo "<table border=1px align=center border-collapse: collapse width: auto;>
		    <tr >
		    <th>Reg Id</th>
		   		<th>Name</th>
		   		<th>Category</th>
		   		<th>Area</th>
		   		<th>Items</th>
		   		<th>Part</th>
		   		<th>Average</th>
		   		
		   	</tr>";
		   	while ($row=$result->fetch_assoc())
		   	{
		   		echo "<tr>
		   				<td>".$row['reg_id']."</td>
		   				<td>".$row['name']."</td>
		   				<td>".$row['category']."</td>
		   				<td>".$row['area']."</td>
		   				<td>".$row['item']."</td>
		   				<td>".getPart($conn,$row['item'])."</td>
		   				<td>".$row['avgr']."</td>
		   			</tr>";
		   				
		  	}
		   	echo "</table>";
}


}

?>
</div>
</div>
</div>

</body>
</html>
