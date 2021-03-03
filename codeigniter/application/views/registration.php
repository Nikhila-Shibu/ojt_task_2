<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
		table{
			border: 2px solid;
			padding:30px;
			margin:10px;
			text-align: center;
			}
			input{
				padding-right: 20px;
				margin-top:20px;
				text-align: center;
			}
			form{
				align:center;
				margin:0 auto;
				width:340px;
			}
	</style>
</head>
<body>
	<form method="post" action="<?php echo base_url()?>main/regist">
	<table>
		<th>
			<td><h1>Registration</h1></td>
		</th>
	<tr>
		<td>Name:</td>
		<td><input type="name" name="name"></td>
	</tr>
	<tr>
		<td>Address:</td>
		<td><textarea name="address"></textarea></td>
	</tr>
	<tr>
		<td>Gender:</td>
		<td><input type="radio" name="gender" value="male">
			<label for="male">male</label>
			</td>
		<td><input type="radio" name="gender" value="female">
			<label for="female">female</label></td>
	</tr>
	<tr>
		<td>Age:</td>
		<td><input type="age" name="age"></td>
	</tr>
	<tr>
		<td>Email id:</td>
		<td><input type="email" name="email"></td>
	</tr>
	<tr>
		<td>Password:</td>
		<td><input type="Password" name="Password"></td>
	</tr>
	<tr>
		<td><input type="submit" name="Register" value="Register"></td>
	</tr>
</table>
</form>
</body>
</html>