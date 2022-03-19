<?php 


if($_SERVER['REQUEST_METHOD']=='POST'){


    //Getting values 
    //Getting values
    $c_id = $_POST['c_id'];
    $c_name = $_POST['c_name'];
    $c_mobile= $_POST['c_mobile'];
    $c_email=$_POST['c_email'];


    //importing database connection script 
    require_once('Conn.php');


    //Creating sql query 
    $sql = "UPDATE customer SET c_name='$c_name',c_mobile='$c_mobile',c_email='$c_email' WHERE c_id = $c_id;";


     //Updating database table 
    if(mysqli_query($con,$sql)){
    echo 'Customer Updated Successfully';
    }else{
    echo 'Could Not Update customer Try Again';
    }
    
    //closing connection 
    mysqli_close($con);
    }



