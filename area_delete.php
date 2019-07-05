
<?php
if(isset($_GET['id']))
{
  $id=$_GET['id'];
  include("dbconnect.php"); 
  $result=$conn->query("DELETE FROM tbl_area WHERE id=$id") or die(mysqli_error());
  header("location:area.php?task=successfull");
}
else
{
  header("Location:area.php?task=failed");
}
?>
</body>


</html>