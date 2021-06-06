<?php

$connection = mysqli_connect("localhost","root","","db_internship");
 
//query
$q = mysqli_query($connection,"select * from tb_student") or die(mysqli_error($connection));

//below fun will fetch data as numerical array
$row = mysqli_fetch_row($q);
    
//debug
print_r($row);
echo $row[0].$row[1].$row[2].$row[3];

//numerical nd associative
$row = mysqli_fetch_array($q);
echo "<pre>";
print_r($row);
echo $row[0].$row[1].$row[2].$row[3];
echo $row['st_id'].$row['st_name'].$row['st_gender'].$row['st_mobile'];
