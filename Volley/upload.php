<?php

if($_SERVER['REQUEST_METHOD']=='POST'){

   $image=$_POST['photo'];
   $name=$_POST['name'];
   include 'Conn.php';
   
   $path = "upload/$name.png";

   $actualpath = "http://10.0.2.2/API/$path";

   $sql = "INSERT INTO images (photo,name) VALUES ('$actualpath','$name')";

 
   if (mysqli_query($con,$sql)){
    file_put_contents($path,base64_decode($image));
    echo "Successfully Uploaded";
   }
   mysqli_close($con);
  }
  else{
  echo "Error";
  } 









