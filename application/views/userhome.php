<html>
<head>
<style>
nav{
padding:5px;
font-size: 20px;

text-align: center;
}
.bi{
background-color:rgba(144,110,141,0.5);
background-size:cover;
}

.menubar ul{
list-style:none;
display:inline-flex;
padding:20px;
margin-top: 0px;
font-size: 20px;
}
.menubar ul li a{
color:black;
text-decoration:none;
padding:10px;
}
.menubar ul li{
     padding:15px;
}
.menubar ul li a:hover{
background-color:blue;
display:block;
border-radius:10px;
}
.submenu {
display:none;
margin:10px;
}
.menubar ul li:hover .submenu{
display:block;
position:absolute;
background-color:green;
border-radius:20px;
}
.submenu  ul{
display:block;
}
.submenu ul li{
border-bottom:2px solid blue;
}
.h2
{
text-align: center;
margin-top: 20px;
font-size: 50px;

}

</style>
<title>   </title>

</head>
<body class="bi">
<h1 class="h2" style="color:gold;">USER HOME</h1>

<nav class="menubar">


<ul>
<li><a href="<?php echo base_url()?>main/user_register">Home</a></li>

<li><a href="<?php echo base_url()?>main/userupdateform">Profile Update</a></li>


</ul>

</nav>



</body>
</html>