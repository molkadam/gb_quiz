<?php
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
 //echo $response;

 $decode = json_decode($response,true);
 
// echo "<br>";
 echo"<pre>";
  print_r($decode);
  print_r( $decode['results'][0]);

//  echo $dcode['result']['question'];
 



?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
    <?php 
    
        foreach ($decode['results'] as $result)

        {
            echo "<pre>";
            //print_r( $result);
            print_r(array_keys($decode));
           echo "<h3>".$result['question']."</h3>";
            echo"<br>";
            //echo $result['correct_answer'];
            echo "<pre>";
        $correct_ans = $result['correct_answer'];
       //echo $result['correct_answer'];
       //print_r($correct_ans);
            //print_r(explode(" ",$result['correct_answer']));
            //print_r(array_merge($correct_ans, $result['incorrect_answers']));
            array_push( $result['incorrect_answers'],$correct_ans);
       
       
       print_r($result['incorrect_answers']);
       
       // print_r(array_rand($result['incorrect_answers'],4));
       
        }
    ?>

    </form>
</body>
</html>