
<?php
if(isset($_GET['id']))
{
  $id=$_GET['id'];
  include("dbconnect.php"); 
  $result=$conn->query("DELETE FROM tbl_category WHERE id=$id") or die(mysqli_error());
  header("location:category.php?task=successfull");
}
else
{
  header("Location:category.php?task=failed");
}
?>
</body>


</html>