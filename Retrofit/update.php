<?php 
 require_once 'Connection.php';

 if($_SERVER['REQUEST_METHOD'] == 'POST')
 {

   $id = $_POST['id'];
   $name = $_POST['name'];
   $salary = $_POST['salary'];
   $desi = $_POST['designation'];
   $mobile = $_POST['mobile'];

 	$query = "UPDATE  user SET name = '$name',salary = '$salary', designation = '$desi', mobile = '$mobile' WHERE id='$id'";

 
     $exeQuery = mysqli_query($con, $query); 

 	
     echo ($exeQuery) ? json_encode(array('code' =>1, 'message' => 'data successfully update')) :  json_encode(array('code' =>2, 'message' => 'data failed to update'));
 
 
    }
    else
    {
        echo json_encode(array('kode' =>101, 'pesan' => 'invalid request'));
         //echo json_encode(array('code' =>101, 'message' => 'invalid request'));
    }
   
    ?>