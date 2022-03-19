<?php 
 if($_SERVER['REQUEST_METHOD']=='POST'){
 
 //Getting values
 $c_id = $_POST['c_id'];
 $c_fullname = $_POST['c_name'];
 $c_mobile= $_POST['c_mobile'];
 $c_email=$_POST['c_email'];
 
	

  //Importing our db connection script
 require_once('Conn.php');
 
 //Creating an sql query
 $sql = "INSERT INTO customer (c_name,c_mobile,c_email) VALUES ('$c_fullname','$c_mobile','$c_email')";
 

 //Executing query to database
 if(mysqli_query($con,$sql)){
 echo 'customer Added Successfully';
 }else{
 echo 'Could Not Add customer';
 }

 //Closing the database 
 mysqli_close($con);
 }
?>