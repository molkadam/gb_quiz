<?php 
session_start();
include('db.php');
if(!empty($_SESSION['user_id']))
{

    header('Location:dashboard.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> 
    <title>Login</title>
</head>
<body>
<?php include('header.php')?>
    <div class="container">
        <div class="row">
            <h2 class="text-center">Login</h2>
        <form action="" method="post" id="register_form">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                <input type="hidden" name="login_form" id="login_form" class="form-control" valeu="reg_form" required/>
                        <label>Email</label>  
                        <input type="email" name="email" id="email" class="form-control" required/>
                
                        <label>Password</label>  
                        <input type="password" name="pass" id="pass" class="form-control" required/>
                    
                        <input type="button" name="login" id="login" value="Login" class="btn btn-success theme-btn" style="margin-top:5px;" /> 
                        <br>
                        <br>
                        <div id="result">
                            
                        </div>
                        <div id="result1">
                            <div>Not register Yet <a href="register.php">Click here to Register</a></div>
                        </div>
                        <div class="panel">
                             <h5><b>For admin Login use below credentials</b></h5>   
                             <ul>
                                 <li>Email : admin@gmail.com</li>
                                 <li>Password : 123456</li>
                             </ul>
                        </div>
                </div> 
            </div> 
                                 
        </form>
        </div>
    </div>

    <script>
            $('#login').on('click',function(){
               
                var login = 'login';
                var email = $('#email').val();
                var pass = $('#pass').val();
                var EmailRegex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;

                if(email == '')
                {
                    alert('Enter email Id');
                }
                else if(!EmailRegex.test(email))
                {
                    alert('Please Enter Valid  email Id');
                    
                }
                else if (pass == '') {
                    alert('Enter Passwords');
                } 
                else
                {

                    $.ajax({  
                     url:"reg_script.php",
                     method:"POST",
                     data:({login:login,email:email,pass:pass}),  
                    //  beforeSend:function(){  
                    //       $('#save_work').val("Inserting");  
                    //  },  
                     success:function(data){  
                          //$('#camp_add_form')[0].reset();  
                          console.log(data);
                        //   $('#t_work_form').trigger("reset");
                        //   $('#d_work_id').val('');
                        //   $('#add_todays_work_Modal').modal('hide');  
                          $('#result').html(data);  
                     }  
                });
                }
            });
    </script>
</body>
</html>