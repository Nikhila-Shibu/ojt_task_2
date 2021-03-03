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
      body
      {
        background-image: url('../img/l1.jpg');
        background-size: cover;
      }
    </style>
    <body>
        <section >
          <div class="container">
            <div class="row">
              <div class="col-6 py-5 mt-5">
          <h1 class="text-center text-white">LOGIN </h1>

  
            <form  action="<?php echo base_url()?>main/logins" method="POST" class=" border  border-2   border-dark p-5 rounded-bottom rounded bg-dark">
              <div class="row mb-3">
                <div class="col-sm-10">
                    <input type="email" class="form-control" placeholder="email/username/mobile" name="email" >
                </div>
              </div>
              <div class="row mb-3">
                <div class="col-10">
                  <input type="password" class="form-control" placeholder="password" name="password">
                </div>
              </div>
                <input type="submit" class="btn btn-success btn-lg" style="width: 100px;" value="LOGIN">
                <a href="<?php echo base_url()?>main/forgotpassword" class=" text-white">Forgot Password</a>  

            </form>  
          </div>
    </div>
  </div>
</section>
<script src="js/jquery.js"></script>
<script src="js/script.js"></script>
</body>
</html>