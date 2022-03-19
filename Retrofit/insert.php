<?php
 
 include 'Connection.php';

 if($_SERVER['REQUEST_METHOD'] == 'POST'){

   $name = $_POST['name'];
   $salary = $_POST['salary'];
   $desi = $_POST['designation'];
   $mobile = $_POST['mobile'];

  $query = "INSERT INTO user (name,salary,designation,mobile) VALUES ('$name','$salary','$desi',$mobile)";

  $exeQUery = mysqli_query($con, $query);

  echo($exeQUery) ? json_encode(array('code' =>1, 'message' => 'message to add data')) : json_encode(array('code' =>2, 'message' => 'data failed to add'));
 
 }

 else{

    echo json_encode(array('code'=>101, 'message' => 'invalied request'));

 } 

 