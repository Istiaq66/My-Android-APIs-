<?php 
 //Importing Database Script 
 require_once('Conn.php');
 
    
  //---FOR BANGLA INSERT-----
 
 mysqli_query($con,'SET CHARACTER SET utf8'); 
 mysqli_query($con,"SET SESSION collation_connection ='utf8_general_ci'");
 
 //----------
 
 //Creating sql query
 $sql = "SELECT * FROM customer";
 
 //getting result 
 $r = mysqli_query($con,$sql);
 
 //creating a blank array 
 $result = array();
 
 //looping through all the records fetched
 while($row = mysqli_fetch_array($r)){
 
 //Pushing name and id in the blank array created 
  array_push($result,array(
 "c_id"=>$row['c_id'],
 "c_name"=>$row['c_name'],
 "c_mobile"=>$row['c_mobile'],
 "c_email"=>$row['c_email']
 )); 
 
 
 
	
 }
 
 //Displaying the array in json format
 
  //way 1 --object wise
 //echo json_encode(array('result'=>$result));
 
 //way 2 --array wise
 
 echo json_encode($result);
 
 
 
 mysqli_close($con);