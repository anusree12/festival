
<?php
if(isset($_GET['id']))
{
  $id=$_GET['id'];
  include("dbconnect.php"); 
  $result=$conn->query("DELETE FROM tbl_items WHERE id=$id") or die(mysqli_error());
  header("location:items.php?task=successfull");
}
else
{
  header("Location:items.php?task=failed");
}
?>
</body>


</html>