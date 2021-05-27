<?php
	
	$a= $_POST['txt1'];
	$b= $_POST['txt2'];
	$c= $_POST['txt3'];
	$d= $_POST['txt4'];
	
	
	echo "<table border=  1px solid black >";
	echo "<tr>";
	echo "<td>"; 
		echo "Name" ;
	echo "</td>";
	echo "<td>"; 
		echo "$a";
	echo "</td>";
	echo "</tr>";
	
	echo "<tr>";
	echo "<td>"; 
		echo "Last Name ";
	echo "</td>";
	echo "<td>"; 
		echo "$b" ;
	echo "</td>";
	echo"</tr>";
	
	echo "<tr>";
	echo "<td>"; 
		echo "Email ";
	echo "</td>";
	echo "<td>"; 
		echo "$c" ;
	echo "</td>";
	
	echo "<tr>";
	echo "<td>"; 
		echo "Date of Birth ";
	echo "</td>";
	echo "<td>"; 
		echo "$d" ;
	echo "</td>";
	echo "</tr>";
	echo "</table>";
	