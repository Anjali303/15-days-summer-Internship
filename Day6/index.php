<?php

$host='localhost';
$username='root';
$password='';
$dbname='db_internship';

$connection = mysqli_connect($host,$username,$password,$dbname);


if($_POST)
{
    $name = $_POST['txt1'];
     $gender = $_POST['txt2']; 
     $dob = $_POST['txt3'];
     $email = $_POST['txt4'];
     $mobile = $_POST['txt5'];
     $address = $_POST['txt6'];
     $password = $_POST['txt7'];
     $area = $_POST['txt8'];
     $pincode = $_POST['txt9']; 
     $bloodgroup = $_POST['txt10'];
}

$q= mysqli_query($connection, "insert into tb_student(st_name,st_gender,st_dob,st_email,st_mobile,st_address,st_password,st_area,st_pincode,st_bloodgroup)
        values('{$name}','{$gender}','{$dob}','{$email}','{$mobile}','{$address}','{$password}','{$area}','{$pincode}','{$bloodgroup}')") or die("Error". mysqli_error($connection));

        if($q)
        {
            echo"<script>alert('Record Added')</script>";
        }
?>

<html>
    <head>
        <title>title</title>
    </head>
    <body>
        <form method="post">
       	  Name:
          <input type="text" name="txt1" required /></br>
          Gender:
          <select name="txt2"></br>
          <option> Male</option>
           <option> Female</option>
          </select></br>
           date of birth:
           <input type="date" name="txt3"></br>
           Email:
           <input type="email" name="txt4"></br>
           Mobile Number:
           <input type="number" name="txt5"></br>
           Address:
           <input type="text" name="txt6"></br>
           Password:
           <input type="password" name="txt7"></br>
           Area:
           <input type="text" name="txt8"></br>
           Pincode:
           <input type="number" name="txt9"></br>
           blood-Group:
           <input type="text" name="txt10"></br>
           
           <input type="submit">
        </form>
    </body>
</html>
