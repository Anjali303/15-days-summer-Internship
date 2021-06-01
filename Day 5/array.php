<?php

//method 1
$a[0]= 10;
$a['e']= "education";
$a['10']= "ten";

//method 2
$a=array
(
    0=>10,
    "e" => "education",
    10 =>"ten",
);

//print value
echo "e for ".$a['e'];

foreach ($a as $value)
{
   echo "<br>value is $value";
}

foreach ($a as $key => $value)
{
   echo "<br/>key is <b>$key</b> and value is <b>$value</b>";
}
