<!DOCTYPE html>
<html>
<head>
<title></title>
<meta charset=utf-8>
            <meta name="viewport" content="width=device-width,initial-scale=1">
            <!---Fontawesome--->
            <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
            <!---Bootstrap5----->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
            <!---custom style---->
            <link rel="stylesheet" href="../css/style.css">
<style>
	body{
		background-image:url('../img/p1.jpg');
		background-size:cover;
	}
tr,td,th{
border:1px solid;
font-size:15px;
border:4px solid black;
color:black;
border-collapse: collapse;
}
th{
	font-weight: bolder;
	font-size: 18px;
	text-transform:uppercase;
	color:brown;
	text-align:center;
}
	
	table{
		color:black;
			padding:20px;
			margin-left:0px;
			margin-top: 20px;
			text-align: justify;
			font-size:10px;
			font-family: segoe print;
			font-weight: bold;
	}
</style>
</head>
<body>
	<h1 class="text-center">REGISTERED USERS</h1>
	<button class="btn btn-success nav-link text-dark"><a href="<?php echo base_url()?>main/home"><==Home</a>
</button>
<form>
<table class="table table-striped table-info">
<tr><th>firstname</th>
	<th>lastname</th>
	<th>email</th>
<th>phonenumber</th>
<th>dob</th>
<th>address</th>
<th>district</th>
<th>pincode</th>
<th>username</th>
<th>Action</th>
<th>Action</th>
<th>Action</th>

</tr>
<?php
if($n->num_rows()>0)
{
foreach ($n->result() as  $row)
{
?>
<tr>
<td><?php echo $row->fname;?></td>
<td><?php echo $row->lname;?></td>
<td><?php echo $row->email;?></td>
<td><?php echo $row->mobile;?></td>
<td><?php echo $row->dob;?></td>

<td><?php echo $row->address;?></td>
<td><?php echo $row->district;?></td>
<td><?php echo $row->pincode;?></td>
<td><?php echo $row->username;?></td>
<?php
if($row->status==1)
{
?>
<td> approved </td><td><a href="<?php echo base_url()?>main/reject/<?php echo $row->loginid;?>">reject</a></td>
<?php
}
elseif ($row->status==2)
{
?>
<td>rejected</td><td><a href="<?php echo base_url()?>main/approve/<?php echo $row->loginid;?>">approve</a></td>

<?php
}
else
{
?>



<td><a href="<?php echo base_url()?>main/approve/<?php echo $row->id;?>">approve</a></td>
<td><a href="<?php echo base_url()?>main/reject/<?php echo $row->id;?>">reject</a></td>
<?php
}
?>
<td><a href="<?php echo base_url()?>main/delete/<?php echo $row->id;?>">Delete</a></td>
</tr>
<?php
}
} 
?>
</table>
</form>

</body>
</html>
