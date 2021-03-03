<!DOCTYPE html>
<html>
    <head>
        <title>OJT WORK </title>
            <meta charset=utf-8>
            <meta name="viewport" content="width=device-width,initial-scale=1">
            <!---Fontawesome--->
            <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
            <!---Bootstrap5----->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
            <!---custom style---->
            <link rel="stylesheet" href="../css/style.css">
    </head>
    <style>
      .bg
      {
        background-image: url('../img/b.jpg');
        background-size: cover;
      }
    </style>
<body class="bg">
<!-- main section start -->

<section class="">
<div class="row">
<div class="col-6 p-2 mt-4 text-right">
  
<h3 class=" h2 text-center text-white">REGISTRATION</h3>
<form action="<?php echo base_url()?>main/reg" method="post" class="border  border-2 border-light p-5 rounded-bottom rounded bg-dark mt-5 ">
<!---input1----->
  <div class="row">
    <div class="col-10 mb-3">
      <input type="text" class="form-control" placeholder="First name" name="fname" required maxlength="25" pattern="[a-zA-Z]+" >   
    </div>
  </div>
<!---input2----->
  <div class="row">
      <div class="col-10 mb-3">
          <input type="text" class="form-control" placeholder="Last name" name="lname"required maxlength="25" pattern="[a-zA-Z]+" >
      </div>
  </div>

<!----input3----->
  <div class="row mb-3">
      <div class="col-10">
        <input type="email" class="form-control" placeholder="email" name="email" id="email" required="" >
        <span id="email_result"></span>
      </div>
  </div>
<!-------input4------>
  <div class="row mb-3">
      <div class="col-10">
        <input type="text" class="form-control" placeholder="mobile-no" name="mobile" id="mobile" required pattern="[6-9]{1}[0-9]{9}">
        <span id="phno_result"></td></span>
      </div>
  </div>
<!---input5----->
  <div class="row mb-3">
      <div class="col-10">
        <input type="date" class="form-control" placeholder="DOB" name="dob" required="">
      </div>
  </div>
<!---input6----->
  <div class="row mb-3">
      <div class="mb-3 col-10">
          <textarea class="form-control" placeholder="address" rows="3" name="address" required=""></textarea>
      </div>
  </div>
<!---input7----->
  <div class="row mb-3">
      <div class="col-10">
        <input type="text" class="form-control" placeholder="District"  name="district" required="">
      </div>
  </div>
<!---input8----->
  <div class="row mb-3">
      <div class="col-10">
        <input type="text" class="form-control" placeholder="Pincode" name="pincode" required="">
      </div>
  </div>
<!---input9----->
  <div class="row mb-3">
      <div class="col-10">
        <input type="text" class="form-control" placeholder="Username" name="username" id="username" required maxlength="25" pattern="[a-zA-Z]+">
        <span id="username_result"></td></span>
      </div>
  </div>
<!---input10----->
  <div class="row mb-3">
      <div class="col-10">
        <input type="password" class="form-control" placeholder="password" name="password" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" >
      </div>
  </div>
<!---input11----->
  <div class="row mb-3">
      <div class="col-10">
        <input type="submit" name="submit" class="btn btn-warning" value="Register">
<a href="<?php echo base_url()?>main/home">Home</a>

      </div>
  </div>
</div>
</form> 
<div class="col-6 py-3 mt-4 text-right">
  <!-- <img src="../img/re.jpg"class="image-fluid"> -->
  </div> 
</div>
</div>
</div>
</section>
<!-- main section end -->


<script src="js/jquery.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script>  
 $(document).ready(function(){  
      $('#email').change(function(){  
           var email = $('#email').val();  
           if(email != '')  
           {  
                $.ajax({  
                     url:"<?php echo base_url(); ?>main/email_availibility",  
                     method:"POST",  
                     data:{email:email},  
                     success:function(data){  
                          $('#email_result').html(data);  
                     }  
                });  
           }  
      });  
 
 }); 
 $('#mobile').change(function(){  
           var mobile = $('#mobile').val();  
           if(mobile != '')  
           {  
                $.ajax({  
                     url:"<?php echo base_url(); ?>main/phno_availability",  
                     method:"POST",  
                     data:{mobile:mobile},  
                     success:function(data){  
                          $('#phno_result').html(data);  
                     }  
                });  
           }  
      }); 
$('#username').change(function(){  
           var username = $('#username').val();  
           if(username != '')  
           {  
                $.ajax({  
                     url:"<?php echo base_url(); ?>main/uname_availability",  
                     method:"POST",  
                     data:{username:username},  
                     success:function(data){  
                          $('#username_result').html(data);  
                     }  
                });  
           }  
      });    
 </script>  
</body>
</html>