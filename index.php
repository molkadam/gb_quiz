<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
    <title>Document</title>
</head>
<body>
<?php include('header.php')?>  
    <div class="container text-center">
        
        <?php 
            if(!empty($_SESSION['user_id']))
            {
        ?> 
              <h1 class="text-center text-uppercase">Welcome <?php echo ucfirst($_SESSION['name']); ?>, to GB Quiz</h1>
        <?php       
            }
            else
            {  
        ?>
        <h1 class="text-center text-uppercase">Welcome to GB Quiz</h1>
        <a href="register.php" class="btn btn-primary">Sign up</a>
        <a href="login.php" class="btn btn-primary">Login</a>
        <?php } ?>
        
       
    </div>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <script src="JS/scripts.js"></script>
</body>
</html>