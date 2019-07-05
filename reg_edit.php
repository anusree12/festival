<!DOCTYPE html>
<html>
<head>
  <title>Gokulolsavam</title>
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

<?php 
include("dbconnect.php");
if(isset($_GET["task"]))
{
  if($_GET["task"]=="update")
  {
    $id=@$_GET['id'];
    $a=@$_POST["name"];
    $b=@$_POST["category"];
    $c=@$_POST["area"];
    $d=@$_POST["items"];
    $update=$conn->query("UPDATE tbl_registration SET name='$a',category='$b',area='$c',items='$d' WHERE id='$id'") or die(mysqli_error());
    if($update>0)
    {
      header("location:reg_view.php?task=successfully");
    }
    else
    {
      header("location:reg_view.php?task=failed");
    }

  }
}
?>
<div id="reg">
  <?php
if(isset($_GET["id"]))
{
  $id=$_GET['id'];
  $result=$conn->query("SELECT * FROM tbl_registration WHERE id='$id'");
  while ($row=$result->fetch_assoc())
  {
?>
<form action="reg_edit.php?task=update&id=<?php echo $id;?>" method="POST" name="frm">
      

<table align="center">
<tr><h2 align="center">Edit Form</h2></tr>
<tr>
<td>Register Id</td>
<td>
<input type="text" name="regid" value="<?php echo $row['regid'];?>" class="reg" >
</td>
</tr>
<tr></tr><tr></tr><tr></tr>
<tr>
<td>Name</td>
<td><input type="text" name="name" value="<?php echo $row['name'];?>" class="reg" ></td>
</tr>
<tr></tr><tr></tr><tr></tr>
<?php
include("dbconnect.php");
            $sql="SELECT * FROM tbl_category";
            $result=$conn->query($sql);
             	//print_r($result);
            ?>
    <tr>
                <td>Category</td>
                <td><select name="category" value="<?php echo $row['category'];?>" class="reg1">
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
    </tr>

<tr></tr><tr></tr><tr></tr>
<?php
            $sql="SELECT * FROM tbl_area";
            $result=$conn->query($sql);
             	//print_r($result);
            ?>
    <tr>
                <td>Area</td>
                <td><select name="area" value="<?php echo $row['area'];?>" class="reg1">
                  <option >--select--</option>
                <?php
                while($row=$result->fetch_assoc())
                {
                 ?>
                  <option value="<?php echo $row['area']?>"><?php echo $row['area']?></option>
                <?php    
                }
                ?>
                </select></td>
    </tr>
<tr></tr><tr></tr><tr></tr>
<?php
//include("dbconnect.php");
            $sql="SELECT * FROM tbl_items";
            $result=$conn->query($sql);
             	//print_r($result);
            ?>
    <tr>
                <td>Item</td>
                <td><select name="items[]" class="reg1" value="<?php echo $row['item'];?>" multiple="multiple">
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
    </tr>
<tr></tr><tr></tr><tr></tr>	
<tr>
<td></td>
<td><input type="submit" name="submit" value="Register" class="bt">
<input type="reset" name="reset" value="Reset" class="bt">
<!-- <input type="button" name="button" value="View" class="bt" href="evaluation.php"> -->

</td>
</tr>
</table>
</form>
    <?php
  }
}
?>
</div>
</body>
</html>