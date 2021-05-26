<!DOCTYPE html>
<html>
<body>
	<center>
	<h1> Arithmetic Operation</h1>

<h3>1) Addition</h3>
<h3>2) Subtraction</h3>
<h3>3) Multiplication</h3>
<h3>4) division</h3>


<form method= 'POST'>

	<table>
	<tr>
		<td>
			<input type='text' name='num1' value='' placeholder='enter 1st number'>
		</td>
	</tr>
	<tr>
		<td>
			<input type='text' name='num2' value='' placeholder='enter 2nd number'>
		</td>
	</tr>
	<tr>
		<td>
			<input type='text' name='option' value='' placeholder='choose number between 1-4'>
		</td>
	</tr>
	<tr>
		<td>
			<input type='submit' name='submit' value='submit' >
		</td>
	</tr>
	</table>
</form>
</center>

<?php
	
	if(isset($_POST['submit']))
	{
		$a= $_POST['num1'];
		$b= $_POST['num2'];
		$n= $_POST['option'];
		
		switch($n)
		{
			case 1:
				$result= $a+$b;
				echo 'Addition of two number is '.$result;
				break;
				case 2:
				$result= $a-$b;
				echo 'Subtraction of two number is '.$result;
				break;
				case 3:
				$result= $a*$b;
				echo 'Multiplication of two number is '.$result;
				break;
				case 4:
				$result= $a/$b;
				echo 'Division of two number is '.$result;
				break;
				default:
				echo'Invalid option';
				break;
		}
		return 0;
	}
?>
</body>
</html>