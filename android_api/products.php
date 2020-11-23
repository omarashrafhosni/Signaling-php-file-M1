<?php
$host= 'localhost';
$user='root';
$pwd='';
$db='android_api';

$conn= mysqli_connect($host,$user, $pwd,$db);
if(!$conn ){
	die("Error in connection: ".mysqli_connect_error());
}
$response =array();
$sql_query= "select * from products";
$result= mysqli_query($conn,$sql_query);

if(mysqli_num_rows($result)>0){
	$response['success']= 1;
	$products= array();
	while($row= mysqli_fetch_assoc($result)){
		array_push($products,$row);
	}
	$response['products']= $products;
}
else{
	$response['sucess']=0;
	$response['message']= 'No Data';
}
echo json_encode($response);
mysqli_close($conn);
?>	