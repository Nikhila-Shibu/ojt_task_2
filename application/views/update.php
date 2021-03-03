<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
		table,th,td{
		border:1px solid;
		color:green;
		}
	</style>
</head>
	<body>
		<form method="post" action="<?php echo base_url()?>main/userupdate">
		<?php
		if(isset($user_data))
		{
			foreach($user_data->result()as $row1)
			{
				?>
				<table>
					<tr>
						<td>First Name:</td>
						<td><input type="text" name="fname" value="<?php echo $row1->fname;?>"></td>
					</tr>
					<tr>
						<td>Last Name:</td>
						<td><input type="text" name="lname" value="<?php echo $row1->lname;?>"></td>
					</tr>
					<tr>
						<td>Email:</td>
						<td><input type="email" name="email" value="<?php echo $row1->email;?>"></td>
					</tr>
					<tr>
						<td>Mobile:</td>
						<td><input type="text" name="mobile" value="<?php echo $row1->mobile;?>"></td>
					</tr>
					<tr>
						<td>DOB:</td>
						<td><input type="text" name="dob" value="<?php echo $row1->dob;?>"></td>
					</tr>
					<tr>
						<td>Address:</td>
						<td><textarea name="address"><?php echo $row1->address;?></textarea>
						</td>
					</tr>
					<tr>
						<td>District:</td>
						<td><input type="text" name="district" value="<?php echo $row1->district;?>"></td>
					</tr>
					<tr>
						<td>Pincode:</td>
						<td><input type="text" name="pincode" value="<?php echo $row1->pincode;?>"></td>
					</tr>
					<tr>
						<td>Username:</td>
						<td><input type="text" name="username" value="<?php echo $row1->username;?>"></td>
					</tr>
					
					<tr>
						<td><input type="submit" name="update" value="update"></td>
					</tr>
				</table>
			<?php
		}
	
	}	

?>
</form>
</body>
</html>