<?php 
require_once 'Connection.php'; 

//$query = "SELECT * FROM employee ORDER BY nama";
$query = "SELECT * FROM user WHERE 1";


$result = mysqli_query($con,$query);

$array = array();


while ($row  = mysqli_fetch_assoc($result))
{
	$array[] = $row; 
}



echo ($result) ? 
json_encode(array("code" => 1, "result"=>$array)) :
json_encode(array("code" => 0, "message"=>"data not found"));




?>