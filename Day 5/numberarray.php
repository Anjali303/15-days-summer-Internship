<?php

//numerical array
//method 1
$a[0]=10;
$a[1]=20;
$a[2]=30;
$a[3]=40;
$a[4]=50;

//method 2
$a[]=10;
$a[]=20;
$a[]=30;
$a[]=40;
$a[]=50;

//method 3
$a = array(10,20,30,40,50);

echo $a[4];

for($i=0;$i< count($a);$i++)
{
   echo "<br/>".$a[$i];
} 

echo "<pre>";
print_r($a);
echo "<pre>";
echo "<pre>";
var_dump($a);
echo "<pre>";