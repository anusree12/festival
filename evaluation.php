<?php
include("check_evaluation.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Youth Festival</title>
	<link rel="stylesheet" type="text/css" href="custom.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Satisfy&display=swap" rel="stylesheet">
	<style type="text/css">
    body
    {
      font-family: 'Roboto', sans-serif;  
    }
</style>
</head>
<body>
	
	<div id="eva">
		<form>
			<table align="center">
				<tr><h2 align="center">Evaluation Sheet</h2></tr>
				
				<?php
				include("dbconnect.php");
            	$sql="SELECT * FROM tbl_category";
            	$result=$conn->query($sql);
             	//print_r($result);
            	?>
    			<tr>
                	<td>Category</td>
                	<td><select name="category" class="eva1">
                  	<option >--select--</option>
                <?php
                while($row=$result->fetch_assoc())
                {
                 ?>
                  	<option value="<?php echo $row['category']?>"><?php echo $row['category']?></option>
                <?php    
                }
                ?>
                </select></td>
    		
					<?php
				include("dbconnect.php");
            	$sql="SELECT * FROM tbl_items";
            	$result=$conn->query($sql);
             	//print_r($result);
            	?>
    			
                	<td>Item</td>
                	<td><select name="items" class="eva1">
                  	<option >--select--</option>
                <?php
                while($row=$result->fetch_assoc())
                {
                 ?>
                  	<option value="<?php echo $row['items']?>"><?php echo $row['items']?></option>
                <?php    
                }
                ?>
                </select></td>
    		
				
					<td></td>
					<!-- <td><input type="button" name="button" value="Show" href="evaform.php" class="bt"></td> -->
					<td><input type="submit" name="submit" value="Show" class="bt"></td>
				</tr>
			</table>
		</form>
		<div id="ser" style="margin-top: 50px;">
	<?php
	include("dbconnect.php");
if (!empty($_REQUEST['submit'])) 
{
    $cat= mysqli_real_escape_string($conn,$_REQUEST['category']); 
    $itm= mysqli_real_escape_string($conn,$_REQUEST['items']);     
    $sql = "SELECT * FROM tbl_registration WHERE category ='$cat'"; 
    
$result=$conn->query($sql);
if($result->num_rows>0)
{
	echo "<table border=1px align=center border-collapse: collapse width: auto;>
		    <tr >
		    	<th>RegId</th>
		   		<th>Name</th>
		   		<th>Judge1</th>
		   		<th>judge2</th>
		   		<th>judge3</th>
		   		<th>Average</th>
		   		
		   	</tr>";
		   	while ($row=$result->fetch_assoc())
		   	{

		   		if(strpos($row['items'],$itm) !== false)
		   		{
		   			if(!checkEvaluation($conn,$row['regid'],$itm))
		   			{

		   			echo "<tr>
		   				<td>".$row['regid']."</td>
		   				<td>".$row['name']."</td>";
		   				
		   			?>
		   			<form method="POST">
		   			<td><input type="text" name="jdg1" class="jdg"></td>
		   				<td><input type="text" name="jdg2" class="jdg"></td>
		   				<td><input type="text" name="jdg3" class="jdg"></td>
		   				<td><input type="submit" name="<?php echo $row['regid']; ?>" value="Average" class="jdg"></td></form>
		   				<?php
if(isset($_POST[$row['regid']]))
{
	$a=$_POST['jdg1'];
	$b=$_POST['jdg2'];
	$c=$_POST['jdg3'];
	$totl= $a+$b+$c;
	$avg=$totl/3;
include("dbconnect.php");
$sql="INSERT INTO tbl_evaluation(reg_id,name,category,area,item,jdg1,jdg2,jdg3,avgr) VALUES('".$row['regid']."','".$row['name']."','".$row['category']."','".$row['area']."','$itm','$a','$b','$c','$avg')";
if(mysqli_query($conn,$sql))
	{
		//header("location:registration.php"?task="Successfully Added");
		echo "<script>alert('Average marks added Successfully'); window.location.reload();</script>";
		
	}
	// else
	// {
	// 	echo mysqli_error($conn);
	// }
	
}
		   		
		   			}
		   		}

		   		
		   				
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
