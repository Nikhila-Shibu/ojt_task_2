<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<style>
	form{
		margin:10px;
		padding:15px;
		height :200px;
		width:100px;

	}
</style>
<body>
<form method="post" action="<?php echo base_url()?>main/log">
	<fieldset>
		emailid:<input type="emailid" name="emailid" placeholder="enter your emailid"><br>
		password:<input type="password" name="password" placeholder="enter your password"><br>
		<input type="submit" value="login">
	</fieldset>
</form>
</body>
</html>
