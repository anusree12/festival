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
				<tr><h2 align="center">RESULT</h2></tr>
				
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
		    	<th>Position</th>
		    	<th>RegId</th>
		   		<th>Name</th>
		   		<th>Avarage</th>
		   		
		   		
		   	</tr>";
		   	while ($row=$result->fetch_assoc())
		   	{
		   		if(strpos($row['items'],$itm) !== false)
		   		{
		   				
		   				print_r($itm);
		   				$sql = "SELECT reg_id,name,avgr FROM tbl_evaluation ORDER BY avgr DESC";	
		   				    
						$result=$conn->query($sql);
						//print_r($result);
						$pos = 0;

						foreach ($result as $value) {
							//print_r($value);

							$pos++;

							echo "<tr>
						<td> $pos </td>
		   				<td>".$value['reg_id']."</td>
		   				<td>".$value['name']."</td>
		   				<td>".$value['avgr']."</td>
		   				</tr>";

		   				if($pos > 2)
		   					break;
							
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
