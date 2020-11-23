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
$sql_query= "SELECT products.id, shop.name, shop.latitude, shop.longitude, shop_product.price, shop_product.special FROM products,shop,shop_product
WHERE products.id= shop_product.product_id AND shop.id=shop_product.shop_id ";
$result= mysqli_query($conn,$sql_query);

if(mysqli_num_rows($result)>0){
	$response['success']= 1;
	$shop_product= array();
	while($row= mysqli_fetch_assoc($result)){
		array_push($shop_product,$row);
	}
	$response['shop_product']= $shop_product;
}
else{
	$response['sucess']=0;
	$response['message']= 'No Data';
}
echo json_encode($response);
mysqli_close($conn);
?>	