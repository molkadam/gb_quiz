<?php
session_start();
include('db.php');
if(!empty($_SESSION['user_id']))
{

    header('Location:dashboard.php');
}
//echo $_SESSION['user_id'];


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
               <!-- <link rel="stylesheet" href="css/style.css"> -->
</head>
<body>
    <?php include('header.php')?>
    <div class="container" >
    <h2 class="text-center">Register</h2>
    <form action="" method="post" id="register_form">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
            <input type="hidden" name="reg_form" id="reg_form" class="form-control" valeu="reg_form" required/>
                
                    <label>Name</label>  
                    <input type="text" name="name" id="name" class="form-control" required/>
                
                    <label>Email</label>  
                    <input type="email" name="email" id="email" class="form-control" required/>
            
                    <label>Password</label>  
                    <input type="password" name="pass" id="pass" class="form-control" required/>
                
                    <input type="submit" name="user_add" id="user_add" value="Register" class="btn btn-success theme-btn" style="margin-top:5px;" /> 
                    <br>
                    <br>
                    <div id="result">
                        
                    </div>
                    <div id="result1">
                        <div>if alredy register <a href="login.php">Click here to login</a></div>
                    </div>
            </div> 
        </div> 
                                 
    </form>
    
    </div>
    
    <script>
        $('#user_add').on("click", function(event){  
            var reg_form = $('#reg_form').val();
            var name = $('#name').val();
            var email = $('#email').val();
            var pass = $('#pass').val();
            var EmailRegex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;

            if(name == '')
            {
                alert('Enter your name.');
            }
            else if(email == '')
            {
                alert('Enter your email.');
            }
            else if(!EmailRegex.test(email))
            {
                alert('Please Enter Valid  email Id');  
            }
            else if(pass == '')
            {
                alert('Please Enter Password'); 
            }
            else if(pass.length < 6)
            {
                alert('Passwoed should be min 6 character'); 
            }
            else
            {
                $.ajax({  
                     url:"reg_script.php",
                     method:"POST",
                     data:({register:reg_form,name:name,email:email,pass:pass}),  
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

        //    event.preventDefault();  
        // //    console.log('data');
        //         $.ajax({  
        //              url:"reg_script.php",
        //              method:"POST",
        //              data:$('#register_form').serialize(),  
        //             //  beforeSend:function(){  
        //             //       $('#user_add').val("registering");  
        //             //  },  
        //              success:function(data){  
        //                   //$('#camp_add_form')[0].reset();  
        //                   $('#register_form').trigger("reset");
        //                 //   $('#d_work_id').val('');
        //                  // $('#add_todays_work_Modal').modal('hide');  
        //                   $('#result').html(data);  
        //                   console.log(data);
        //              }  
        //         });  
            
      });
    </script>
</body>
</html>