<?php

$connection = mysqli_connect("localhost","root","","db_internship");

$editid = $_GET['id'];

$editq = mysqli_query($connection,"select * from tb_student where st_id='{$editid}'") or die (mysqli_error($connection));
$editdata = mysqli_fetch_array($editq);

if($_POST)
{
    $txt1 = $_POST['txt1'];
     $txt2 = $_POST['txt2']; 
     $txt3 = $_POST['txt3'];
     $txt4 = $_POST['txt4'];
     $txt5 = $_POST['txt5'];
     $txt6 = $_POST['txt6'];
     $txt7 = $_POST['txt7'];
     $txt8 = $_POST['txt8'];
     $txt9 = $_POST['txt9']; 
     $txt10 = $_POST['txt10'];

     $uq = mysqli_query($connection, "update tb_student set st_name='{$txt1}' , st_gender='{$txt2}' ,st_dob='{$txt3}' ,st_email='{$txt4}',st_mobile='{$txt5}',st_address='{$txt6}',st_password='{$txt7}',st_area='{$txt8}',st_pincode='{$txt9}',st_bloodgroup='{$txt10}' where st_id='{$editid}'");
    
     if($uq){
         echo "<script>alert{'Record Updated'};window.location='table.php';</script>";
     }
}

?>
<html>
    <head>
        <title>title</title>
    </head>
    <body>
        <form method="post">
       	  Name:
          <input type="text" value="<?php echo $editdata['st_name']?>" name="txt1" required /></br>
          Gender:
          <select name="txt2"></br>
          <option <?php if($editdata['st_gender']=="Male"){    echo 'selected';}?>> Male</option>
           <option <?php if($editdata['st_gender']=="Female"){    echo 'selected';}?>> Female</option>
          </select></br>
           date of birth:
           <input type="date" value="<?php echo $editdata['st_dob']?>"  name="txt3"></br>
           Email:
           <input type="email" value="<?php echo $editdata['st_email']?>"  name="txt4"></br>
           Mobile Number:
           <input type="number" value="<?php echo $editdata['st_mobile']?>"  name="txt5"></br>
           Address:
           <input type="text" value="<?php echo $editdata['st_address']?>"  name="txt6"></br>
           Password:
           <input type="password" value="<?php echo $editdata['st_password']?>" name="txt7"></br>
           Area:
           <input type="text" value="<?php echo $editdata['st_area']?>"  name="txt8"></br>
           Pincode:
           <input type="number" value="<?php echo $editdata['st_pincode']?>"  name="txt9"></br>
           blood-Group:
           <input type="text" value="<?php echo $editdata['st_bloodgroup']?>"  name="txt10"></br>
           
           <input type="submit">
        </form>
    </body>
</html>
