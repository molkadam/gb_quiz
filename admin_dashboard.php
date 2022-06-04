<?php 
session_start();
include('db.php');



if(empty($_SESSION['user_id']) || $_SESSION['u_type']== 'guest')
{
    header('Location:login.php');
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
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css" />  
    <title>Admin Pannel</title>
</head>
<body>
    <?php include('header.php')?> 
    <h1 class="text-center">Admin Dashboard</h1><br><br>
    <div class="container">
        <table class="table table-bordered" id="datatable_display">
            <thead>
                <tr>
                    <th>User Name</th>
                    <th>Email</th>
                    <th>Total Questions</th>
                    <th>Attempted</th>
                    <th>Not Attempted</th>
                    <th>Correct Answers</th>
                    <th>Incorrect Answers</th>
                    <th>Your Score</th>
                    <th>Out Off</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    $query = " SELECT * FROM tbl_users WHERE u_type='guest' ";
                    $res = mysqli_query($conn,$query);
                    while($rows = mysqli_fetch_assoc($res))
                    {
                ?>  
                    <tr>
                        <td><?php echo $rows['name']?></td>
                        <td><?php echo $rows['email']?></td>
                        <?php 
                            $query1 =" SELECT COUNT(*) as total FROM tbl_questions WHERE uid='".$rows['id']."' ";
                            $res1 = mysqli_query($conn,$query1);
                            $rows1 = mysqli_fetch_array($res1);
                        ?>    
                        <td><?php echo $rows1['total']?></td>
                        <?php 
                            $query2 =" SELECT COUNT(*) as attempt FROM tbl_questions WHERE uid='".$rows['id']."' AND result IS NOT NULL";
                            $res2 = mysqli_query($conn,$query2);
                            $rows2 = mysqli_fetch_array($res2);
                        ?> 
                        <td><?php echo $rows2['attempt']?></td>
                        <td><?php echo $rows1['total']-$rows2['attempt']?></td>
                        <?php 
                            $query3 =" SELECT COUNT(*) as correct_ans FROM tbl_questions WHERE uid='".$rows['id']."' AND result =1";
                            $res3 = mysqli_query($conn,$query3);
                            $rows3 = mysqli_fetch_array($res3);
                        ?> 
                        <td><?php echo $rows3['correct_ans']?></td>
                        <td><?php echo $rows1['total']-$rows3['correct_ans']?></td>
                        <td><?php echo $rows3['correct_ans']*10?></td>
                        <td><?php echo $rows1['total']*10?></td>

                    </tr>
                <?php       
                    }

                ?>
                
            </tbody>
        </table>
    </div>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="JS/scripts.js"></script>
    <script>
        $(document).ready(function () {
            $('#datatable_display').DataTable({
                "ordrer": [[1,'desc']],
                "paging": true,
            });
        });
    </script>
</body>
</html>