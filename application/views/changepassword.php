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
        background-image: url('../img/p6.jpg');
        background-size: cover;
      }
      .
    </style>
    <body>
        <section>
            <h1 class="text-center"> Forgot Password</h1>
  <div class="container py-5 mt-5">
    <div class="row">
        <?php
                {
                    $this->session->flashdata('message');
                }
                ?>
            <form  action="<?php echo base_url()?>main/restlink" method="POST" class="modal-content animate border  border-2   border-dark p-5 rounded-bottom rounded bg-dark">
                
              <div class="row mb-3">
                <div class="col-sm-10">

                    <input type="text" class="form-control" placeholder="update password" name="upassword" >
                </div>
              </div>
              <div class="row mb-3">
                <div class="col-sm-10">

                    <input type="text" class="form-control" placeholder="Confirm Password" name="cpassword" >
                </div>
              </div>
              
              
                <!-- <input type="submit" class="btn btn-success btn-lg" style="width: 100px;" value="Reset your Password"> -->
                <button class="btn btn-success ">Change</button>
                <a href="<?php echo base_url()?>main/home" class=" text-white">Home</a>  
            </form>  
          </div>
    </div>
  </div>
</section>
<script src="js/jquery.js"></script>
<script src="js/script.js"></script>
</body>
</html>