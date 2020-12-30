<?php
include "Connect.php";
$productname= $_GET['productname'];
$shopname= $_GET['shopname'];
$specialoffers=$_GET['specialoffers'];
$qry="delete from savedproducts where productname='$productname' AND shopname='$shopname' AND specialoffers='$specialoffers'";
if(mysqli_query($con,$qry)){
 
 echo 'Data Submit Successfully';
 
 }
 else{
 
 echo 'Try Again';
 
 }
 mysqli_close($con);
echo $productname;
echo $shopname;
echo $specialoffers;
?>