<html>
<body>
<style>

	table,th,td{
		width: 70%;
	}
	td{
		width : 20%;
	}
</style>
	
	<form method= 'post' action='process1.php'>
		<table border= 1px solid black border-collapse : collapse>
		<h1>Registration Form</h1>
			<tr>
				<td>First Name :- </td>
				<td><input type = 'text' Name='txt1' placeholder='Enter Name' required ></td>
			</tr>
			<tr>
				<td>Last Name :- </td>
				<td><input type = 'text' Name='txt2' placeholder='Enter Last Name' required ></td>
			</tr>
			<tr>
				<td>Email :- </td>
				<td><input type = 'text' Name='txt3' placeholder='Enter Email' required ></td>
			</tr>
			<tr>
				<td>Date of Birth :- </td>
				<td><input type = 'date' Name='txt4' placeholder='Enter Date of Birth' required ></td>
			</tr>
			<tr>
				<td><input type = 'submit'></td>
				<td><input type = 'reset'></td>
			</tr>
		</table>
	</form>
</body>
</html>