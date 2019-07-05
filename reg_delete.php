<?php
if(isset($_GET['id']))
{
  $id=$_GET['id'];
  include("dbconnect.php"); 
  $result=$conn->query("DELETE FROM tbl_registration WHERE id=$id") or die(mysqli_error());
  if(mysqli_query($conn,$sql))
{
  // echo "<script>alert('Are You Sure To Delete'); window.location.reload();</script>";
}
else
{
  header("Location:reg_view.php?task=failed");
}
}
?>
