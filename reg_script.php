<?php 
session_start();
include('db.php');

if(isset($_POST['login']))
{
    $email = $_POST['email'];
    $pass = $_POST['pass'];

    $query = "SELECT * FROM tbl_users WHERE email= '".$email."'";
    $result = mysqli_query($conn,$query);
    if(mysqli_num_rows($result) > 0)
    {
        $rows = mysqli_fetch_array($result);
        echo $rows['pass'];
        if($rows['pass'] == $pass)
        {
            //echo "valid user";
            $_SESSION['user_id'] = $rows['id'];
            $_SESSION['email'] = $rows['email'];
            $_SESSION['u_type'] = $rows['u_type'];
            $_SESSION['name'] = $rows['name'];
            $_SESSION['is_attempted'] = $rows['is_attempted'];
            if($_SESSION['u_type'] == 'admin')
            {
            echo "<script> window.location.href = 'admin_dashboard.php';</script>";
            }
            else
            {
            echo "<script> window.location.href = 'dashboard.php';</script>";
            }
            
            // header('Location:dashboard.php');
        }
        else
        {
            echo "Please Enter Valid Password";
        }
    }
    else
    {
        echo "This email not register";
    }
}

if(isset($_POST['register']))
{
     $name =$_POST['name']; 
     $email =$_POST['email']; 
     $pass =$_POST['pass']; 
  
    $check_email =" SELECT * FROM tbl_users WHERE email='".$email."' ";
    $is_exist = mysqli_query($conn,$check_email);
    if(mysqli_num_rows($is_exist) > 0)
    {
        echo "<script> alert('Email Id already exist.');
       window.location.href = 'login.php';
       </script>";
       exit();
    }
    

    $query ="
    INSERT INTO tbl_users ( name,email,pass,u_type,created_at,updated_at) 
    VALUES ('".$name."','".$email."','".$pass."','guest',now(),now())";
    
    if(mysqli_query($conn,$query)){
        $u_id = mysqli_insert_id($conn);
        getQuestions($u_id);
       echo" 
       <script> alert('user register succesfully');
       window.location.href = 'login.php';
       </script>";


    }else{
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
    }
    
   
}

function getQuestions($u_id)
{
    global $conn;


    $curl = curl_init();

    curl_setopt_array($curl, array(
      CURLOPT_URL => 'https://opentdb.com/api.php?amount=10',
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => '',
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 0,
      CURLOPT_FOLLOWLOCATION => true,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => 'GET',
      CURLOPT_HTTPHEADER => array(
        'Cookie: PHPSESSID=67066595e14d3ae6c3dd90c2148c8b0a'
      ),
    ));

    $response = curl_exec($curl);

    curl_close($curl);

     $decode = json_decode($response,true);
     
    foreach($decode['results'] as $result)
    {
        
        $question = mysqli_real_escape_string($conn,$result['question']);
         $c_ans = $result['correct_answer'];
    
            $ic_ans = $result['incorrect_answers'];
             // 2 array merge
            array_push($ic_ans,$c_ans);
            shuffle($ic_ans);
            
        echo  $query = "INSERT INTO tbl_questions (question,correct_answer,uid) value ('".$question."','".$result['correct_answer']."','".$u_id."')";
        $res =  mysqli_query($conn,$query);
        echo "<br>";
        $insert_id = mysqli_insert_id($conn);
        if($res)
        {
            
            foreach($ic_ans as $options)
            {
                
                if($options == $c_ans)
                {
                    $correct_ans = 1;
                }
                else
                {
                    $correct_ans = 0;
                }
                
                 $query1 = "INSERT INTO tbl_options (q_id,options,correct_ans) value ('".$insert_id."','".$options."','".$correct_ans."') ";
                mysqli_query($conn,$query1);
                
            
            }
        }
       
        
    }
}

if(isset($_POST['flag']) && $_POST['flag'] == 'selectedans')
{
    $selected_que_id = $_POST['que_id'];
    $selected_ans_id = $_POST['ans_id'];
    $u_id = $_SESSION['user_id'];
    $query = "SELECT * FROM tbl_options WHERE q_id='".$selected_que_id."' AND id='".$selected_ans_id."'";
    $res = mysqli_query($conn,$query);
    if(mysqli_num_rows($res) >0)
    {
        $rows = mysqli_fetch_array($res);
        echo $rows['options'];
        echo $rows['correct_ans'];

        echo $update = " UPDATE tbl_questions SET result='".$rows['correct_ans']."' , user_ans='".$rows['options']."' WHERE id='".$selected_que_id."'";
        mysqli_query($conn,$update);

    }
}

if(isset($_POST['flag']) && $_POST['flag'] == 'submit_data')
{
    $attempt = " UPDATE `tbl_users` SET `is_attempted`='1' WHERE id='".$_SESSION['user_id']."' ";
    mysqli_query($conn,$attempt);
     $get_all_sub_data = "SELECT * FROM tbl_questions WHERE uid = '".$_SESSION['user_id']."' ";
    $res = mysqli_query($conn,$get_all_sub_data);
    // print_r($res);
    if(mysqli_num_rows($res) >0)
    {
        $counter = $attempted_count = $unattempted_count = $correct_ans = 0;

        $attempted_que = [];

        while($rows = mysqli_fetch_assoc($res))
        {
            $counter++;
            if($rows['result'] == NULL)
            {
                $unattempted_count++;
            }
            else{
                $attempted_count++;
            }

            if($rows['result'] == 1)
            {
                $correct_ans++;
            }
        }
        // echo "Total Question:" .$counter; echo "<br>";
        // echo "attempted_count:" .$attempted_count; echo "<br>";
        // echo "unattempted_count:" .$unattempted_count; echo "<br>";
        // echo "correct_ans:" .$correct_ans; echo "<br>";
 ?>
        
        <div class="container">
            <h2>Your Result</h2>
                   
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>Total Questions</th>
                    <th>Attempted</th>
                    <th>Not Attempted</th>
                    <th>Correct Answers</th>
                    <th>Incorrect Answers</th>
                    <th>Your Score</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td><?php echo $counter;?></td>
                    <td><?php echo $attempted_count;?></td>
                    <td><?php echo $unattempted_count;?></td>
                    <td><?php echo $correct_ans;?></td>
                    <td><?php echo $counter-$correct_ans;?></td>
                    <td><?php echo $correct_ans*10 ."/100";?></td>
                    
                    
                </tr>
                
                </tbody>
            </table>
            <h3>Thank You !</h3>
        </div>

 <?php
        // $insert_res_data = " INSERT INTO `tbl_result_data`(`u_id`, `total_questions`, `attempted_question`, `correct_ans`, `score`) VALUES ('""','[value-3]','[value-4]','[value-5]','[value-6]') ";

    }

    // $query = " SELECT COUNT(*) as total FROM tbl_questions WHERE uid = '".$_SESSION['user_id']."'";
    // $res = mysqli_query()    

}








?>