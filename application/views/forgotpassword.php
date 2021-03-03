<!DOCTYPE html>
<html>
    <head>
        <title>forgot password</title>
            <meta charset=utf-8>
            <meta name="viewport" content="width=device-width,initial-scale=1">
            <!---Fontawesome--->
            <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
            <!---Bootstrap5----->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
            <!---custom style---->
            <link rel="stylesheet" href="../css/styl.css">
    </head>
    <style>
      
    </style>

        <body>
                

    <div class="container">
        <div class="row box">
            <div class="col-4">
                
            </div>

            <div class="col-4 py-5">
                <!-- <?php 
                if($error=$this->session->flashdata('msg'))
                {
                ?>
                <p style="color:blue"><strong>Successs</strong><?php echo $error;
                        ?></p>
                        <?php }
                        ?> -->
                <h1 class="text-center"> Forgot Password</h1> 

<form action="<?php echo base_url(); ?>main/send" method="post" class="form-control border border-2 p-5">
    <div class="row mb-3">
        <div class="col-sm-10">
            <?php 
                if($error=$this->session->flashdata('msg'))
                {
                ?>
                <p style="color:blue"><strong>Successs</strong><?php echo $error;
                        ?></p>
                        <?php }
                        ?>
    <input type="email" name="from" class="form-control " placeholder="Enter Email" required><br>
</div>
</div>
    <!-- <textarea name="message" class="form-control" placeholder="Enter message here" required></textarea><br> -->
    <button type="submit" class="btn btn-primary">Reset Password</button>
    <a href="<?php echo base_url(); ?>main/home">Home</a>

</form>

    <img src="../img/p2.png">
 </div>
 <div class="col-4">
     
 </div>   
</div>   
</div> 
<script src="js/jquery.js"></script>
<script src="js/script.js"></script>
</body> 
</html>