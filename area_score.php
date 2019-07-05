
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
        
        border: 1px solid grey;
       }

   
	#area
		{
		margin-top: 50px;
		float: left;
		margin-left: 170px;
		width: 360px;
		height: 140px;
		
	    }
	    .ttl
	    {
	    	
	    	width: 175px;
	    	height: 80px;
	    	color:red;
	    	text-align: center;
	    	


	    }		
	
	
</style>
</head>
<body>
<div id="eva">
<div id="area">
	<?php
	include("dbconnect.php");

     // $area = mysqli_real_escape_string($conn,$_REQUEST['area']);     
    //$sql = "SELECT * FROM tbl_evaluation WHERE area ='$area'"; 
    $sql = "SELECT area,sum(avgr) as total FROM tbl_evaluation GROUP BY area"; 
    
$result=$conn->query($sql);
if($result->num_rows>0)
{
	echo "<table border=1px align=center  class=tbl>
		    <tr>
		    <th>Area</th>
		    <th>Total Marks</th>
		   			
		   	</tr>";
		   	while ($row=$result->fetch_assoc())
		   	{
		   		echo "<tr>
		   		        <td><p class=ttl>".$row['area']."</p></td>
		   				<td><p class=ttl>".$row['total']."</p></td>
		   				
		   			</tr>";
		   				
		  	}
		   	echo "</table>";
}




?>
</div>
</div>


</body>
</html>
