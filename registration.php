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
  
  <div id="reg">
    <form method="POST" action="reg_insert.php">
      <table align="center">
        <tr><h2 align="center">Registration Form</h2></tr>
        <tr>
          <td>Register Id</td>
          <td>
            <input type="text" name="regid"class="reg">
          </td>
        </tr>
        <tr></tr><tr></tr><tr></tr>
        <tr>
          <td>Name</td>
          <td><input type="text" name="name" class="reg"></td>
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
                  <td><select name="category" class="reg1">
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
                  <td><select name="area" class="reg1">
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
                  <td><select name="items[]" class="reg1" multiple="multiple">
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
     <!--   <?php
 
            if (isset($msg))
            {
                echo $_msg;
                
            }
        ?> -->
    </form>
  </div>
</div>
</body>
</html>