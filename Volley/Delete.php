<?php

 if($_SERVER['REQUEST_METHOD']=='POST'){

 //importing database connection script 
 require_once('Conn.php');

  $c_id = $_POST['c_id'];
 
  //creating sql query
 $sql = "DELETE FROM customer where c_id = $c_id";
 
 //Deleting record in Database
 if(mysqli_query($con,$sql)){
     echo 'customer deleted Successfully';
 }
 else{
     echo'Could not Delete customer try again';
 }

 //closing connection
 mysqli_close($con);
 }
 