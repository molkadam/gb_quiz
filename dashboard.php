<?php 
session_start();
include('db.php');
if(empty($_SESSION['user_id']))
{
    header('Location:login.php');
}
if($_SESSION['u_type'] == 'admin')
{
  header('Location:admin_dashboard.php');
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
    <title>Dashboard</title>
</head>
<body>
<?php include('header.php')?>      
  <div class="container">
    <h1>Welcome <?php echo ucfirst($_SESSION['name']); ?>, to GB Quiz</h1>

  </div>

  <?php
  $check = " SELECT is_attempted FROM tbl_users WHERE id='".$_SESSION['user_id']."' ";
  $check_res = mysqli_query($conn,$check);
  $check_res_array = mysqli_fetch_array($check_res);

    if($check_res_array['is_attempted'] == 0)
    {
  ?>
  <div class="container" id="question_paper">
      <h3>Questions</h3>
      <?php 
        $query = "SELECT * FROM tbl_questions WHERE uid = '".$_SESSION['user_id']."'" ;
        $res = mysqli_query($conn,$query);
        if(mysqli_num_rows($res) > 0)
        {
          $i =1;
          while($rows = mysqli_fetch_assoc($res))
          {
            //echo $rows['question'];
            ?>
            
            <div class='panel panel-default'>
              <div class='panel-heading'> <?php echo $i++.". ". $rows['question']?></div>
                <div class='panel-body'>
                <?php  $query1 = "SELECT * FROM tbl_options WHERE q_id = '".$rows['id']."'" ;
                  $res1= mysqli_query($conn,$query1);
                  if(mysqli_num_rows($res1) > 1)
                  {
                    while($rows1 = mysqli_fetch_assoc($res1))
                    {
                      // echo $rows1['options'];
                      // echo "<br>";
                      ?>
                      <div class="radio">
                        <label><input class="select_ans" type="radio" qid="<?php echo $rows['id'];?>" ansid="<?php echo $rows1['id'];?>" name="selectedans_<?php echo $rows['id']; ?>" ><?php echo $rows1['options'];?></label>
                      </div>
                  <?php
                    }
                  }

                ?>
                  
                </div>
            </div>
           <?php
          }
        }

      ?>
      <button id="submit_data" class="btn btn-primary">Submit</button>
  </div>
  <?php
    }
    else
    {
  ?>
  <div id="show_result">
    <?php 
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
  
    ?>
  </div>
  
  <?php } ?>
  <div id="show_result1" style="display:none;">

  </div>    
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <script src="JS/scripts.js"></script>
</body>
</html>