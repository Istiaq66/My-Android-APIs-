<?php 
 require_once 'Connection.php';

 if($_SERVER['REQUEST_METHOD'] == 'POST')
 {
 	$id = $_POST['id'];

 	$query = "DELETE FROM user WHERE id ='$id'";

 	$exeQuery = mysqli_query($con, $query); 

 
    echo ($exeQuery) ? json_encode(array('code' =>1, 'message' => 'successfully Delete data')) :  json_encode(array('code' =>2, 'message' => 'data failed to swap'));


	}
 else
 {
 	
	 
	  echo json_encode(array('code' =>101, 'message' => 'invalid request'));
 }

 ?>