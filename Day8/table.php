<?php

$connection = mysqli_connect("localhost","root","","db_internship");
 
//query
$q = mysqli_query($connection,"select * from tb_student") or die(mysqli_error($connection));
echo"<table border='1'>";
echo"<tr>";
echo"<th>ID</th>";
echo"<th>NAME</th>";
echo"<th>GENDER</th>";
echo"<th>DOB</th>";
echo"<th>Email</th>";
echo"<th>Mobile No.</th>";
echo"<th>Address</th>";
echo"<th>Password</th>";
echo"<th>Area</th>";
echo"<th>Pincode</th>";
echo"<th>Bloodgroup</th>";
echo"<th>action</th>";
echo"</tr>";
while ($row = mysqli_fetch_array($q))
{
    echo"<tr>";
    echo "<td>{$row['st_id']}</td>";
    echo "<td>{$row['st_name']}</td>";
    echo "<td>{$row['st_gender']}</td>";
    echo "<td>{$row['st_dob']}</td>";
    echo "<td>{$row['st_email']}</td>";
    echo "<td>{$row['st_mobile']}</td>";
    echo "<td>{$row['st_address']}</td>";
    echo "<td>{$row['st_password']}</td>";
    echo "<td>{$row['st_area']}</td>";
    echo "<td>{$row['st_pincode']}</td>";
    echo "<td>{$row['st_bloodgroup']}</td>";
    
    echo "<td> <a href= 'edit.php?id={$row['st_id']}'>Edit</a> | <a href='delete.php?deleteid={$row['st_id']}'>deletet</a></td>";
    echo"</tr>";
}
    echo"</table>";
echo "<a href ='insert_record.php'>add record</a>";