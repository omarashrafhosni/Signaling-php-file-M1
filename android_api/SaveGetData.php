<?php

include 'SaveConfig.php' ;
 
 $con = mysqli_connect($HostName,$HostUser,$HostPass,$DatabaseName);
 
 $productname = $_POST['productname'];
 $shopname = $_POST['shopname'];
 $distance= $_POST['distance'];
 $price= $_POST['price'];
 $specialoffers= $_POST['specialoffers'];

 $Sql_Query = "insert into savedproducts (productname,shopname,distance,price,specialoffers) values ('$productname','$shopname','$distance','$price','$specialoffers')";
 
 if(mysqli_query($con,$Sql_Query)){
 
 echo 'Data Submit Successfully';
 
 }
 else{
 
 echo 'Try Again';
 
 }
 mysqli_close($con);
?>